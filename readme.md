<h1>Sentinela</h1>
<p>O projeto Sentila foi criado com intuito de servir como um sistema de monitoramento com reconhecimento facial. Por se tratar de um projeto acadêmico seguir nessa linha de pesquisa demandaria muito tempo, sendo assim, o projeto foi transformado em um sistema de chamada de alunos por reconhecimento facial.</p>
<p>O sistema é um protótipo com funcionalidades resumidas, é possível cadastrar as fotos dos alunos via app e depois tirar uma foto da classe e automaticamente o sistema reconhece os alunos presentes.</p>
<p>O sistema é formado de três partes:</p>
<ul>
<li><b>Background</b> - Criado em PHP com o framework laravel, é por onde é possível ver as presenças e faltas dos alunos</li>
<li><b>App</b> - Criado com Ionic 3, é por onde se cadastram as fotos dos alunos e também se tira a foto para a chamada</li>
<li><b>Script python</b> - Esse script faz o reconhecimento facial comparando as fotos dos alunos pré cadastrados com a foto tirada do grupo para a realização da chamada</li>
</ul>
<br/>
<b>obs.:</b> Para o perfeito funcionamento é necessário instalar as bibliotecas do python:<br/>
<ul>
<li>dlib (normalmente é necessário complar)</li>
<li>opencv</li>
<li>numpy</li>
<li>conectores para banco de dados (o sistema utilizou o MySql)</li>
</ul>
