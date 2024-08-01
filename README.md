<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


# TestCadUserLaravel

# Desafio: Desenvolvedor PHP + Laravel 

Construído com [sail laravel](https://laravel.com/docs/9.x/sail)

Se estiver utilizando ~/.zshrc ou ~/.bashrc adicione no final do arquivo o seguinte comando
```
alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'
```

inicializar utilize o ``` sail up ``` OU ```./vendor/bin/sail up ``` para inicializar o projeto.

## Rotas API

http://localhost:80/api/user [POST, GET]

http://localhost:80/api/user/{id} [GET, DELETE, PUT]

exemplo de body para inserção e edição:
```
{
	"name" : "teste",
	"email": "teste@teste.com.br",
	"password": "123456"
}
```
## Rotas WEB

http://localhost/user/register

## License

The Laravel framework222 is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
