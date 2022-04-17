# Информационная система аптеки
*Проект создаваемый в качестве задачи квалификационного экзамена на 4м курсе*

## Что используем?
- Laravel
- MySQL
- Vue.JS
- JavaScript
- JQuery

## Структура БД
![erDiagram](https://i.imgur.com/lVlYTdj.png)

## Установка
Если вам необходим мой проект, то вот что вам необходимо сделать

1. Клонируем репозиторий (git clone)
2. Переходим в папку проекта cd
3. Устанавливаем пакеты composer install --prefer-dist
4. Создаем файл .env и в консоли пишем php artisan key:generate
5. Вписываем БД в .env и мигрируем БД php artisan migrate:fresh
6. Запускаем через php artisan serve или Open Server Panel (всегда вторым способом круче)
7. ??? Убийство ???
8. Profit
