// Importando bibliotecas
#include <DHT.h>

#include <WiFi.h>
#include <HTTPClient.h>
#include <ArduinoJson.h>

// Definindo variáveis WiFi

const char* ssid = ""; //Insira o nome de seu WiFi
const char* senha = ""; //Insira a senha de seu WiFi

int id_dispositivo = 1;
String nome_dispositivo = "ESP32 DOIT DEV KIT COM";

// Definindo constantes
#define DHT_PIN 4
#define DHT_TYPE DHT22

#define RELAY_PIN 5

#define WATER_PIN 34

#define SOIL_PIN 35

// Instanciando objetos
DHT dht(DHT_PIN, DHT_TYPE);

// Definindo variáveis
float umidade;
float temperatura;

int valor_agua;

int valor_solo;

// Configurando sistema
void setup() {

  // Iniciando Serial
  Serial.begin(115200);

  // Iniciando DHT22
  dht.begin();

  // Inicializando Relé
  pinMode(RELAY_PIN, OUTPUT);
  digitalWrite(RELAY_PIN, LOW);

  // Conectar-se ao WiFi
  conectarWiFi();
  
  //Instanciando dispositivo
  cadastrarDispositivo();

}

void loop() {
  
  // Testa conexão WiiFi
  if(WiFi.status() != WL_CONNECTED){
    conectarWiFi();
  } else {
  
  // Coleta de dados do sensor DHT22
  coletarDadoDHT();

  // Coleta de dados do sensor resistivo de umidade do solo
  coletarDadoSolo();

  // Coleta de dados do sensor de nível de água
  coletarDadoAgua();

  // Envia dados para a APi/Sistema por meio da conexão HTPP e o Método POST
  realizarEnvioDados();
  }
}


// Funções
void cadastrarDispositivo(){
  if(WiFi.status() == WL_CONNECTED){
  // Seleciona o caminho da API/Sistema; Obs: Mude o "localhost" para o ip(v4) de Internet do WiFi
  String URL = "http://localhost:80/Ecotech/Ecotech/Data/post_esp32.php";
  
  HTTPClient http;

  http.begin(URL);
  http.addHeader("Content-Type", "application/json");

  int httpResponseCode = http.POST("{\"id_dispositivo\":\"" + String(id_dispositivo) + "\",\"nome_dispositivo\":\"" + String(nome_dispositivo) + "\"}");

  if(httpResponseCode > 0) {
    String response = http.getString();
    Serial.println("Resposta do servidor: " + response);
  } else {
    Serial.println("Erro ao tentar enviar requisição.");
    Serial.print("Erro: ");
    Serial.println(http.errorToString(httpResponseCode)); 
  }
  http.end();

  delay(1000);
  
  }
}

void conectarWiFi() {
  WiFi.mode(WIFI_OFF);
  delay(1000);
  WiFi.mode(WIFI_STA); // Seleciona o tipo de Wifi para ACCESS POINT
  WiFi.begin(ssid, senha); // Inicaliiza a conexão WiFi
  
  Serial.println("Conctando-se a rede WiFi");

  while(WiFi.status() != WL_CONNECTED){
    delay(500);
    Serial.print(".");
  }

  Serial.print("Conectado a: ");
  Serial.println(ssid);

  Serial.print("Endereço IP: ");
  Serial.println(WiFi.localIP());
}

void coletarDadoDHT() {
  umidade = dht.readHumidity();
  temperatura = dht.readTemperature();

  // Condição do funcionamento do sensor
  if(isnan(umidade) || isnan(temperatura)){
    Serial.println("O sensor apresenta mal funcionamento");
  } else {
    Serial.print("Umidade: ");
    Serial.print(umidade);
    Serial.print("%");

    Serial.print(" / Temperatura: ");
    Serial.print(temperatura);
    Serial.println("°C");
  }
  
  delay(1000);
}

void coletarDadoSolo() {
  // Funcionamento sensor umidade do solo
  valor_solo = analogRead(SOIL_PIN);
  Serial.print("Valor umidade do solo: ");
  Serial.print(valor_solo);
  Serial.println("");

  if(valor_solo > 2600){
    acionarRele();
  } else{
    delay(1000);
  }
}

void coletarDadoAgua() {
  // Funcionamento Sensor de água
  valor_agua = analogRead(WATER_PIN);
  Serial.print("Valor agua: ");
  Serial.print(valor_agua);
  Serial.println("");

  delay(1000);
}

void realizarEnvioDados() {
  // Seleciona o caminho da API/Sistema; Obs: Mude o "localhost" para o ip(v4) de Internet do WiFi
  String URL = "http://localhost:80/Ecotech/Ecotech/Data/post_esp32_data.php";

  HTTPClient http;
  http.begin(URL);
  
  http.addHeader("Content-Type", "application/json");

  int httpResponseCode = http.POST("{\"temperatura\":\"" + String(temperatura) + "\",\"umidade\":\"" + String(umidade) + 
  "\",\"nivel_agua\":\"" + String(valor_agua) + "\",\"umidade_solo\":\"" + String(valor_solo) + 
  "\",\"id_dispositivo\":\"" + String(id_dispositivo) + "\"}");

  if(httpResponseCode > 0) {
    String response = http.getString();
    Serial.println("Resposta do servidor: " + response);
  } else {
    Serial.println("Erro ao tentar enviar requisição.");
    Serial.print("Erro: ");
    Serial.println(http.errorToString(httpResponseCode)); 
  }

  http.end();

  Serial.println("==================================================================================");

  delay(20000);
}

void acionarRele() {
  // Funcionamento Relé
  digitalWrite(RELAY_PIN, HIGH);
  Serial.println("Bomba ligada.");
  delay(2000);
  digitalWrite(RELAY_PIN, LOW);
  Serial.println("Bomba desligada.");
  delay(1000);
}