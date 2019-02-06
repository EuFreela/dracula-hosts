# Plugin Dracula Hosts
Plugin para Dracula Dashboard Clean: hosts

<a href="https://packagist.org/packages/lameck/dracula_hosts" target="_blank">Assinatura</a>

## Dependência
Utilize o Dracula Dashboard Clean. Este plugin, assim como demais outros, acompanharam as futuras atualizações do projeto Dracula. Os plugins permitem uma programação descentralizada reutilizando recursos já definidos no projeto raiz.

<a href="https://github.com/EuFreela/dracula-dashboard-clean/blob/master/README.md" target="_blank">Link do Dracula Dashboard Clean</a>

## Sobre
Este plugin lista os hosts infectados pelo Dracula - um projeto de backdoor criado em linguagem Java e recursos em Pascal.

## INSTALL

<p>Ao tentar executar uma instalação pelo composer, algumas evidencias ficam no cache. Isso pode dificultar alguma instalação de algum nome relacionado. Para evitar esse tipo de problema limpe o cache:</p>
<pre>
composer clearcache
php artisan cache:clear
</pre>

<p>Instale o plugin</p>
<pre>
composer require lameck/dracula_hosts
</pre>

<p>Publique as dependencias do Lameck\Dracula\Hosts\DraculaHostsServiceProvider</p>
<pre>
php artisan vendor:publish
</pre>

<p>Configure o plugin no banco de dados. Abra o database/seeds/DatabaseSeeder.php e adicione a linha</p>
<pre>
$this->call(PluginsTableSeeder::class);
</pre>

<p>Perpetue as configurações</p>
<pre>
composer dump-autoload
</pre>

<p>Configure o plugin no banco de dados</p>
<pre>
php artisan db:seed
</pre>

<p>Log no sistema e utilize seus recursos</p>

<hr>

### REMOVE

<pre>
composer remove lameck/dracula_hosts
composer clearcache
php artisan cache:clear
</pre>



<hr>
<img src="https://i.postimg.cc/B6mksmkQ/9.png">
<img src="https://i.postimg.cc/kMtzLvw9/12.png">
