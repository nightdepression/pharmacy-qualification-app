# Информационная система аптеки
*Проект создаваемый в качестве задачи квалификационного экзамена на 4м курсе*

## Что используем?
- Laravel
- MySQL
- Vue.JS
- JavaScript
- JQuery
- Свой шаблон
- Немного костылей, если будет не лень - исправлю (но не вижу смысла ибо диплом защитил на пятерочку соу соу will see).

## Установка
Если вам необходим мой проект, то вот что вам необходимо сделать

1. Клонируем репозиторий (git clone)
2. Переходим в папку проекта cd
3. Устанавливаем пакеты composer install --prefer-dist
4. Создаем файл .env и в консоли пишем php artisan key:generate
5. Вписываем БД в .env и мигрируем БД php artisan migrate:fresh --seed
6. Запускаем через php artisan serve или Open Server Panel (всегда вторым способом круче, но если не работает то serve)
7. Входим в аккаунт администратора на сайте: 'admin' - mail@mail.ru/adminadmin
8. ??? Убийство ???
9. Profit
(10.) Тесты фронта: npm run test 

# Спасибо моим одногруппникам и преподавателям за наставления по Vue.JS <3 (меньше чем 3)
