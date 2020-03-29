# devprova

Para testar o projeto é necessário efetuar a instalação do programa xampp com apache e mysql e o programa Postman.

Download e instalação do XAMPP resumida para as 3 plataformas: https://programadorviking.com.br/como-instalar-o-xampp/

Para testar o projeto é necessário inserir a pasta devprova dentro do htdocs do programa Xampp.

No Windows o caminho é: C:\xampp\htdocs\desafiodev
No Linux o caminho é:  /opt/lampp/htdocs
No MacOS o caminho é: /Applications/XAMPP/xamppfiles/htdocs

Outro programa necessário para testar o projeto é o Postman, logo abaixo está link's com guia para instalação nas plataformas Linux, MacOS e Windows:

O download é feito através de: https://www.postman.com/downloads/

- Instalação no ambiente Linux: https://www.edivaldobrito.com.br/cliente-rest-postman-no-linux-manualmente/ ou https://www.edivaldobrito.com.br/postman-no-linux-via-snap/

- MacOS: https://support.getpostman.com/hc/en-us/articles/360039876493-How-to-Install-Postman-from-Terminal-

- Windows: https://atendimento.tecnospeed.com.br/hc/pt-br/articles/360017143594-Como-instalar-e-utilizar-o-Postman-para-enviar-requisi%C3%A7%C3%B5es-HTTP

As funções do CRUD devem ser testadas através do Postman.
- Listar todos os posts: Para testar a listagem de todos os posts insira no Postman a URL http://localhost/devprova/posts.

É necessário selecionar a opção "GET", depois insira a URL http://localhost/devprova/posts e clique em Send, para visualizar um exemplo clique aqui http://lucasabreu.kinghost.net/listartodos.png


- Inserção: Para testar a inserção de um Post insira no programa Postman a URL http://localhost/devprova/posts, selecione a opção POST, clique em Body, selecione a opção JSON e insira o seguinte texto:

{
	"description":"Teste de Post",
	"completed":"1"
}

Caso queira visualizar uma imagem de exemplo acesse http://lucasabreu.kinghost.net/inserindo.png

- Update: Para testar Update insira no Postman a URL http://localhost/devprova/posts/numero (no exemplo está escrito numero, mas caso eu queira atualizar o primeiro post, insira o número 1, insira na url: localhost/devprova/posts/1).

É importante selecionar a opção PUT, clicar em "Body", "raw", selecione a opção "JSON", insira o seguinte texto:

{
	"description":"Qualquer texto de sua preferência",
	"completed":"1"
}

e depois clique em Send, para visualizar um exemplo clique aqui http://lucasabreu.kinghost.net/update.png

- Delete: Para testar o Delete insira no Postman a URL http://localhost/devprova/posts/numero (no exemplo está escrito numero, mas caso eu queira atualizar o primeiro post, insira o número 8, insira na url: localhost/devprova/posts/8).

Após inserir a URL é importante selecionar a opção DELETE e clicar em Send.

Para visualizar um exemplo clique aqui http://lucasabreu.kinghost.net/delete.png


- Listar apenas um Post: Para listar apenas um post insira no Postman a URL http://localhost/devprova/posts/numero (no exemplo está escrito numero, mas caso eu queira atualizar o primeiro post, insira o número 9, insira na url: localhost/devprova/posts/9).

Após inserir a URL é importante selecionar a opção GET e clicar em Send.

Para visualizar um exemplo clique aqui http://lucasabreu.kinghost.net/buscarporpost.png
