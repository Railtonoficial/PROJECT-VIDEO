# Projeto de Sistema de Vídeo

Este projeto é um sistema básico de gerenciamento de vídeos e usuários, onde os usuários podem assistir a vídeos, avaliar e interagir com eles. O sistema foi desenvolvido em PHP e utiliza conceitos de Programação Orientada a Objetos (POO).

## Como Usar

1. **Instalação**: Certifique-se de que o PHP está instalado em sua máquina.
2. **Uso**: Crie instâncias das classes `Video`, `Usuario` e `Vizualizacao`, e utilize os métodos disponíveis para gerenciar as interações entre usuários e vídeos.

### Exemplo de Uso

O exemplo de uso mostra como criar instâncias das classes `Video`, `Usuario` e `Vizualizacao`, e realizar operações com elas:

1. **Criação de Vídeos**: Crie instâncias da classe `Video` para representar os vídeos disponíveis.
2. **Criação de Usuários**: Crie instâncias da classe `Usuario` para representar os espectadores.
3. **Visualização de Vídeos**: 
   - Crie instâncias da classe `Vizualizacao`, associando cada usuário a um vídeo.
   - Utilize os métodos `avaliar()` e `avaliarPorcentagem($porcentagem)` para avaliar os vídeos.
   - Os métodos de visualização também atualizam o número de visualizações e a contagem de vídeos assistidos pelo usuário.

Para visualizar o exemplo completo, consulte o arquivo `index.php`, que contém a implementação.

## Conclusão

Este projeto demonstra conceitos de orientação a objetos em PHP, incluindo classes, herança, interfaces e encapsulamento. Sinta-se à vontade para expandir e personalizar as classes conforme necessário.

## Autor

**Feito por Railton Araujo**
