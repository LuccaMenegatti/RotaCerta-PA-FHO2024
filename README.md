# Rota Certa 🚍

O projeto **RotaCerta** foi desenvolvido para auxiliar no planejamento e uso de transporte público em grandes cidades ao redor do mundo, fornecendo informações detalhadas sobre rotas de ônibus e metrô,  ajudando os usuários a otimizarem suas viagens e a obterem informações úteis de forma rápida e prática.

## Funcionalidades

- **Cálculo de rotas de transporte público**: Oferece trajetos de ônibus e metrô, com base nos dados da API do Google Maps.
- **Estatísticas da viagem**: Exibe informações como:
  - Distância total da viagem
  - Tempo estimado de duração
  - Número de paradas
  - Horários de chegada e partida
  - Linha(s) utilizadas
- **Cálculo alternativo a pé**: Caso não existam rotas de transporte público disponíveis, uma rota a pé é sugerida.
- **Interface intuitiva**: O usuário insere o ponto de partida e destino, seleciona o tipo de transporte, e visualiza o trajeto no mapa com as informações detalhadas.

## Tecnologias Utilizadas

- **Backend**: [PHP](https://www.php.net) com o framework [CodeIgniter 4](https://www.codeigniter.com)
- **Frontend**: HTML, CSS e JS com [Bootstrap](https://getbootstrap.com/docs/5.3/getting-started/introduction/)
- **Mapas e estatísticas**: API do [Google Maps](https://console.cloud.google.com/google/maps-apis/build/commutes?pli=1)

## Como funciona?

1. O usuário insere o ponto de partida e destino na interface do aplicativo.
2. Seleciona o tipo de transporte desejado (ônibus ou metrô).
3. A aplicação faz uma requisição à API do Google Maps para calcular a rota.
4. O resultado é exibido na tela, com o mapa e as informações relevantes sobre a viagem.
5. Caso não exista transporte público disponível, o trajeto é calculado para ser feito a pé.

## Instalação

Certifique-se de ter os seguintes requisitos instalados:

- PHP (versão compatível com o CodeIgniter)
- Composer
- Servidor web (Apache)
- Chave de API do Google Maps

### **Passo a Passo**

1. **Clone o repositório**  
   ```bash 
   git clone https://github.com/seu-usuario/rota-certa.git
   ```

2. **Navegue até o diretório do projeto**
    ```bash
    cd RotaCerta-PA-FHO2024
    ```

3. **Instale as dependências**
    ```bash
    composer install
    ```

4. **Configure a chave da API do Google Maps**

    Abra o arquivo app/Config/GoogleMapsConfig.php e insira a sua chave da API no atributo $apiKey, como no exemplo abaixo:
    ```php
    public $googleMapsApiKey = 'SUA CHAVE DA API';
    ```

5. **Inicie o servidor local**
    ```bash
    php spark serve
    ```

6. **Acesse o aplicativo**

    Abra o navegador e acesse o endereço:

    ```plaintext
    http://localhost:8080  
    ```

    Agora o projeto está configurado e pronto para uso! 😊

