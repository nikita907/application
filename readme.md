##  Application
Этот проект представляет собой сервис,который помогает компаниям удобно вести рабочий диалог с клиентами посредством так называемых "квизов".Компания регистрируется на сайте и получает доступ к сервису.Затем,появляется возможность создавать собственные шаблоны квизов или использовать уже разработанные для клиентов.После формирования квиза генерируется ссылка на данный квиз и отправляется клиенту.После заполнения клиентом квиза,они все хранятся в определённой вклдаке
##  Используемые технологии
- Laravel
- MySQL
- OpenServer
- Windows
- PhpStorm
##  Информация по установке
В консоли вводим следующие команды:
- cd domains
- composer self-update
- git clone https://github.com/nikita907/application
- cd laravel
- composer install 
Далее создаем .env файл из env.example
Создаём базу данных MySQL
Прописываем в консоли команду php artisan migrate
Перезапускаем сервер
##   Авторы
Лупекин Никита
Зеньковский Илья