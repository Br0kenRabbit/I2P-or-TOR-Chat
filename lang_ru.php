<?php
/*
* LE CHAT-PHP - a PHP Chat based on LE CHAT - Russian translation
*
* Copyright (C) 2015-2020 Daniel Winzen <daniel@danwin1210.me>
*
* This program is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

//Native language name: Русский
$T=[
	'nodb' => 'Нет соединения с базой данных!',
	'nodbsetup' => 'Нет соединения с базой данных, пожалуйста, создайте базу данных и измените сценарий, чтобы использовать правильную базу данных с заданными именем пользователя и паролем!',
	'changelang' => 'Изменить язык:',
	'expire' => 'Недействительная/с истекшим сроком сессия',
	'kicked' => 'Забанен!',
	'invalnick' => 'Некорректное имя (%1$d символов максимум и оно должно совпадать с выражением "%2$s")',
	'invalpass' => 'Некорректный пароль (Хотя бы %1$d символов и он должен совпадать с выражением "%2$s")',
	'noconfirm' => 'Введенные пароли не совпадают!',
	'incorregex' => 'Неправильное регулярное выражение!',
	'bottom' => 'Вниз',
	'top' => 'Вверх',
	'choose' => '(выбрать)',
	'setup' => 'Установка чата',
	'init' => 'Начальная установка',
	'sulogin' => 'Вход для суперадминистратора',
	'sunick' => 'Ник суперадминистратора:',
	'supass' => 'Пароль суперадминистратора:',
	'suconfirm' => 'Подтверждение пароля:',
	'susuccess' => 'Успешно зарегистрирован!',
	'initbtn' => 'Инициализация чата',
	'initdbexist' => 'Таблицы базы данных уже существуют! Чтобы продолжить, вы должны сначала удалить эти таблицы вручную.',
	'initsuexist' => 'Суперадминистратор уже существует!',
	'initgosetup' => 'Перейти к странице установки',
	'captcha' => 'Captcha',
	'enabled' => 'Включен',
	'onlyguests' => 'Только для гостей',
	'disabled' => 'Выключен',
	'simple' => 'Простая',
	'moderate' => 'Умеренная',
	'extreme' => 'Сильная',
	'nick' => 'Ник:',
	'pass' => 'Пароль:',
	'globalloginpass' => 'Глобальный пароль:',
	'login' => 'Войти',
	'dbupdate' => 'База данных успешно обновлена!',
	'sysmessage' => 'системное сообщение',
	'sysmessages' => 'Системные сообщения',
	'sysmessagetxt' => 'Этот текст предшествует сообщениям из системы.',
	'msgenter' => 'Вход',
	'msgexit' => 'Выход',
	'msgmemreg' => 'Зарегистрированные',
	'msgsureg' => 'Заявитель зарегистрирован',
	'msgkick' => 'Забаненые',
	'msgmultikick' => 'Многократно забаненые',
	'msgallkick' => 'Все забаненые',
	'msgclean' => 'Очистка чата',
	'dateformat' => '<a target="_blank" href="http://php.net/manual/ru/function.date.php#refsect1-function.date-parameters">Формат даты</a>',
	'admfunc' => 'Административные функции',
	'allguests' => 'Все гости',
	'cleanmsgs' => 'Очистка сообщений',
	'room' => 'Общая комната',
	'selection' => 'Выбор',
	'cleannick' => 'По нику:',
	'clean' => 'Очистить',
	'kickchat' => 'Бан (%d минут)',
	'kickreason' => 'Сообщение забаненому',
	'kickpurge' => 'Очистка сообщений',
	'kick' => 'Бан',
	'logoutinact' => 'Выход неактивного чата',
	'logout' => 'Выйти',
	'sessions' => 'Активные сессии',
	'view' => 'Просмотр',
	'filter' => 'Фильтр',
	'guestacc' => 'Изменить гостевой доступ',
	'guestallow' => 'Позволить',
	'guestwait' => 'Разрешить с гостевой',
	'adminallow' => 'Требовать одобрения модератора',
	'guestdisallow' => 'Только участники',
	'addsuguest' => 'Добавить заявителя',
	'register' => 'Зарегистрировать',
	'admmembers' => 'Участники',
	'memdel' => 'Удалить из базы данных',
	'memdeny' => 'Запретить доступ (!)',
	'memsuguest' => 'Набор к претенденту (SG)',
	'memreg' => 'Установить участника',
	'memmod' => 'Набор модератора (M)',
	'memsumod' => 'Набор супермодератора (SM)',
	'memadm' => 'Набор администратора (A)',
	'change' => 'Изменить',
	'regguest' => 'Регистрация гостей',
	'regmem' => 'Регистрация новых участников',
	'sessact' => 'Активные сеансы',
	'sessnick' => 'Ник',
	'sesstimeout' => 'Время ожидания в',
	'sessua' => 'User-Agent',
	'fid' => 'Фильтр ID:',
	'match' => 'Совпадение',
	'replace' => 'Заменять',
	'allowpm' => 'Разрешить в личку',
	'regex' => 'Регулярное выражение',
	'apply' => 'Применить',
	'newfilter' => 'Новый фильтр:',
	'add' => 'Добавить',
	'noframes' => 'Этот чат использует <b>frames</b>. Пожалуйста, включите поддержку в Вашем браузере или используйте подходящий!',
	'delselmes' => 'Удалить выбранные сообщения',
	'staffnotes' => 'Служебные заметки',
	'adminnotes' => 'Примечания администратора',
	'notessaved' => 'Заметки сохранены!',
	'lastedited' => 'Последний раз редактировал %1$s %2$s',
	'savenotes' => 'Сохранить заметки',
	'waitingroom' => 'Гостевая',
	'waittext' => 'Добро пожаловать %1$s, наблюдается задержка входа, доступ к чату будет осуществлен через %2$d секунд.',
	'admwaittext' => 'Добро пожаловать %1$s, наблюдается задержка входа, доступ к чату будет доступен после подтверждения модератором.',
	'waitreload' => 'Если эта страница не отвечает, не обновляется каждые %d секунд, используйте кнопку ниже, чтобы перезагрузить ее вручную!',
	'reload' => 'Перезагрузить',
	'rules' => 'Правила',
	'talkto' => 'Отправить',
	'toall' => 'Все в чате',
	'tomem' => 'Участники',
	'tostaff' => 'Служебные',
	'toadmin' => 'Администратор',
	'alsopurge' => 'Также очистить сообщения',
	'dellast' => 'Удалить последнее сообщение',
	'delall' => 'Удалить все сообщения',
	'switchsingle' => 'Включить однострочный режим',
	'switchmulti' => 'Включить многострочный режим',
	'help' => 'Помощь',
	'helpguest' => 'Все функции интуитивно понятны, просто используйте кнопки. В настройках вашего профиля вы можете настроить частоту обновления, цвет шрифта и желаемый размер окна входа.<br><u>Заметка:</u> Это чат, поэтому даже если вы ничего не пишете, то будет автоматически зарегистрировано через некоторое время..',
	'helpembed' => 'Если вы хотите встроить изображение в свой пост, прикрепите [img] перед вашим URL-изображением. Пример: [img]http://example.com/images/file.jpg будет прикреплять картинку к вашему сообщению.<br>',
	'helpmem' => 'Участники: У вас есть несколько вариантов настроек в вашем профиле. Можно настроить шрифт и изменить свой пароль в любое время.',
	'helpmod' => 'Модераторы: Обратите внимание кнопку администратора внизу. Это перенесет вас на страницу, где вы можете очистить комнату, забанить, просмотреть все активные сеансы и отключить гостевой доступ полностью, если необходимо.',
	'helpadm' => 'Администраторы: Вы способны регистрировать гостей и новые ники без их присутствия в комнате а также редактировать пользователей.',
	'profile' => 'Ваш профиль',
	'ignore' => 'Игнорировать',
	'unignore' => 'Больше не игнорировать',
	'refreshrate' => 'Частота обновления (%1$d-%2$d секунд)',
	'fontcolour' => 'Цвет шрифта',
	'viewexample' => 'Посмотреть примеры',
	'bgcolour' => 'Фоновый цвет',
	'fontface' => 'Шрифт',
	'roomdefault' => 'По умолчанию',
	'bold' => 'Жирный',
	'italic' => 'Курсив',
	'small' => 'Маленький',
	'fontexample' => 'Пример выбранного вами шрифта',
	'timestamps' => 'Показать отметки времени',
	'embed' => 'Вставить изображения',
	'incognito' => 'Режим инкогнито',
	'changenick' => 'Изменить имя',
	'changepass' => 'Изменить пароль',
	'oldpass' => 'Старый пароль:',
	'newpass' => 'Новый пароль:',
	'confirmpass' => 'Подтверждение:',
	'savechanges' => 'Сохранить изменения',
	'reloadpb' => 'Перезагрузить почтовый ящик',
	'reloadmsgs' => 'Обновить',
	'viewpublicnotes' => 'Читать профили пользователей',
	'chgprofile' => 'Профиль',
	'adminbtn' => 'Администратор',
	'admnotes' => 'Примечания администратора',
	'notes' => 'Примечания',
	'clone' => 'Клонировать',
	'randh' => 'Правила и помощь',
	'exit' => 'Выход',
	'bye' => 'Пока %s, заходите снова!',
	'colourtable' => 'Примеры цветов',
	'backtoprofile' => 'Вернуться к вашему профилю',
	'copy' => 'Копия:',
	'choosecol' => 'Выберите ваш цвет:',
	'randomcol' => 'Случайный цвет',
	'enter' => 'Войти в чат',
	'error' => 'Ошибка',
	'admin' => 'Администратор',
	'staff' => 'Служебные',
	'members' => 'Зарегистрированные',
	'guests' => 'Гости',
	'approveguests' => '%d новые гости для одобрения',
	'allowchecked' => 'Разрешить проверку',
	'allowall' => 'Разрешить всем',
	'denychecked' => 'Запретить проверку',
	'denyall' => 'Запретить всем',
	'denymessage' => 'Отправить сообщение с отказом:',
	'butallowdeny' => 'Отправить',
	'waitempty' => 'Больше запросов для одобрения нет.',
	'wrongcaptcha' => 'Неверная капча!',
	'captchaexpire' => 'Защитный код уже используется или время истекло.',
	'noguests' => 'Извините, входят только зарегистрированные!',
	'curchat' => 'Сейчас %d разговор (ов) в комнате:',
	'cantreg' => 'Вы не можете зарегистрироваться %s',
	'alreadyreged' => '%s уже зарегистрирован.',
	'successreg' => '%s успешно зарегистрирован.',
	'cantchgstat' => 'Невозможно изменить статус %s',
	'succdel' => '%s успешно удален из базы данных.',
	'succchg' => 'Статус %s успешно изменен.',
	'wrongpass' => 'Неправильный пароль!',
	'wrongglobalpass' => 'Неправильный глобальный пароль!',
	'succprofile' => 'Ваш профиль был успешно сохранен.',
	'backtologin' => 'Вернуться на страницу входа.',
	'backtochat' => 'Вернуться в чат.',
	'Beige' => 'Бежевый',
	'Black' => 'Черный',
	'Blue' => 'Синий',
	'BlueViolet' => 'Фиолетово-синий',
	'Brown' => 'Коричневый',
	'Cyan' => 'Голубой',
	'DarkBlue' => 'Темно-синий',
	'DarkGreen' => 'Темно-зеленый',
	'DarkRed' => 'Темно-красный',
	'DarkViolet' => 'Темно-фиолетовый',
	'DeepSkyBlue' => 'Голубое небо',
	'Gold' => 'Золотой',
	'Grey' => 'Серый',
	'Green' => 'Зеленый',
	'HotPink' => 'Ярко-розовый',
	'Indigo' => 'Индиго',
	'LightBlue' => 'Светло-синий',
	'LightGreen' => 'Светло-зеленый',
	'LimeGreen' => 'Зеленый лайм',
	'Magenta' => 'Пурпурный',
	'Olive' => 'Оливковый',
	'Orange' => 'Оранжевый',
	'OrangeRed' => 'Оранжево-красный',
	'Purple' => 'Фиолетовый',
	'Red' => 'Красный',
	'RoyalBlue' => 'Королевский синий',
	'SeaGreen' => 'Морской зеленый',
	'Sienna' => 'Сиена',
	'Silver' => 'Серебряный',
	'Tan' => 'Загар',
	'Teal' => 'Чирок',
	'Violet' => 'Фиолетовый',
	'White' => 'Белый',
	'Yellow' => 'Желтый',
	'YellowGreen' => 'Желто-зеленый',
	'redirectto' => 'Перенаправление на:',
	'nonhttp' => 'Запрошенная ссылка не http:',
	'httpredir' => 'Если это не работает, попробуйте это:',
	'actions' => 'Действия',
	'sesip' => 'IP-адрес',
	'css' => 'CSS стили',
	'memberexpire' => 'Тайм-аут пользователей (минут)',
	'guestexpire' => 'Тайм-аут гостей (минут)',
	'kickpenalty' => 'Бан (минут)',
	'entrywait' => 'Время ожидания в гостевой (секунд)',
	'captchatime' => 'Тайм-аут Captcha (секунд)',
	'messageexpire' => 'Тайм-аут сообщения (минут)',
	'messagelimit' => 'Лимит сообщений (общих)',
	'maxmessage' => 'Максимальная длина сообщения',
	'confirm' => 'Вы уверены?',
	'yes' => 'Да',
	'no' => 'Нет',
	'colbg' => 'Фоновый цвет',
	'coltxt' => 'Цвет текста',
	'maxname' => 'Максимальная длина имени',
	'minpass' => 'Минимальная длина пароля',
	'defaultrefresh' => 'По умолчанию время перезагрузки сообщения (секунды)',
	'suguests' => 'Разрешить гостей',
	'rulestxt' => 'Правила (html)',
	'imgembed' => 'Вставка изображений',
	'trackip' => 'Показать IP-сессию',
	'captchachars' => 'Символы, используемые в Captcha',
	'memkick' => 'Пользователи могут исключать, если не присутствует модератор',
	'memkickalways' => 'Пользователи могут всегда́ исключать',
	'forceredirect' => 'Принудительное перенаправление',
	'redirect' => 'Пользовательский скрипт перенаправления',
	'backuprestore' => 'Бэкап и восстановление',
	'backup' => 'Бэкап',
	'restore' => 'Восстановление',
	'settings' => 'Настройки',
	'linkfilter' => 'Фильтрация ссылок',
	'chatname' => 'Название чата',
	'destroy' => 'Уничтожить чат',
	'destroyed' => 'Чат успешно уничтожен',
	'topic' => 'Тема',
	'passreset' => 'Сброс пароля',
	'cantresetpass' => 'Невозможно сбросить пароль',
	'succpassreset' => 'Пароль успешно сброшен',
	'entermsg' => '%s вошел в чат.',
	'exitmsg' => '%s покинул чат.',
	'memregmsg' => '%s теперь зарегистрированный член.',
	'suregmsg' => '%s теперь зарегистрированный заявитель.',
	'kickmsg' => '%s исключен из чата.',
	'multikickmsg' => '%s исключены из чата.',
	'allkickmsg' => 'Все гости исключены из чата.',
	'cleanmsg' => '%s был очищен.',
	'sendallmsg' => '%s - ',
	'sendmemmsg' => '[M] %s - ',
	'sendmodmsg' => '[Staff] %s - ',
	'sendadmmsg' => '[Admin] %s - ',
	'sendprvmsg' => '[%1$s to %2$s] - ',
	'msgsendall' => 'Сообщение всем',
	'msgsendmem' => 'Сообщение только членам',
	'msgsendmod' => 'Сообщение только модераторам',
	'msgsendadm' => 'Сообщение только администраторам',
	'msgsendprv' => 'Личное сообщение',
	'numnotes' => 'Число исправлений для сохранения',
	'revisions' => 'Исправления:',
	'older' => 'Старые',
	'newer' => 'Новые',
	'accessdenied' => 'В доступе отказано.',
	'loggedinas' => 'Вы вошли как %s и не имеете доступа к этой секции.',
	'newnickname' => 'Новое имя:',
	'nicknametaken' => 'Имя уже занято',
	'nopass' => 'Некорректный пароль (Хотя бы %d символов), не меняя имени',
	'gdextrequired' => 'gd расширение для PHP требуетса для етой функции. Пожалуйста установите его сначала...',
	'memcachedextrequired' => 'The memcached extension of PHP is required for the caching feature. Please install it first or set the memcached setting back to false.',
	'sodiumextrequired' => 'The libsodium extension of PHP is required for the encryption feature. Please install it first or set the encrypted setting back to false.',
	'pdo_mysqlextrequired' => 'Pdo_mysql расширение для PHP требуетса для драйверов базы данных. Пожалуйста установите его сначала..',
	'pdo_pgsqlextrequired' => 'Pdo_pgsql расширение для PHP требуетса для драйверов базы данных. Пожалуйста установите его сначала..',
	'pdo_sqliteextrequired' => 'Pdo_sqlite расширение для PHP требуетса для драйверов базы данных. Пожалуйста установите его сначала.',
	'jsonextrequired' => 'Json расширение для PHP требуетса для етой функции. Пожалуйста установите его сначала.',
	'sendmail' => 'Отправить сообщение как новое публичное',
	'mailsender' => 'Отправить сообщение на этот адрес',
	'mailreceiver' => 'Отправить сообщение по этому адресу',
	'modfallback' => 'Вернуться в комнату ожидания, если отстутсвует модератор для подтверждения гостей',
	'regpass' => 'Повторите пароль<br>Зарегистрироваться',
	'guestreg' => 'Разрешить гостям регистрироваться самостоятельно',
	'asmember' => 'Как член',
	'assuguest' => 'Как заявитель',
	'fatalerror' => 'Фатальная ошибка',
	'prevmatch' => 'Тексты в полях совпадают',
	'matchtoolong' => 'Текст в поле слишком длинний. Можно использовать максимум 255 символов, попробуйте разбить поле на части.',
	'nocache' => 'Автозагрузка (для старых браузеров, для сортрировки сверху-вниз).',
	'disablepm' => 'Отключить личные сообщения',
	'disablechat' => 'Отключить чат',
	'disabletext' => 'Чат отключил сообщение (html)',
	'disabledtext' => 'Временно отключен',
	'defaulttz' => 'Часовой пояс по умолчанию',
	'tz' => 'Часовой пояс',
	'optional' => '(опционально)',
	'userloggedin' => 'Пользователь с текущим именем уже в сети.',
	'regednick' => 'Это имя принадлежит зарегистрированному пользователю.',
	'failednotice' => 'неудачная попытка входа (ы)',
	'dismiss' => 'признал',
	'eninbox' => 'Включить оффлайн-почту',
	'inboxmsgs' => 'Прочитайте %d входящих сообщений',
	'offline' => '(оффлайн)',
	'deleteacc' => 'Удалить аккаунт',
	'eninnone' => 'Никаму',
	'eninall' => 'Для всех',
	'eninmem' => 'Только для членов',
	'eninstaff' => 'Только для модераторов',
	'eninadmin' => 'Только для админов',
	'nickregex' => 'Ник regex',
	'passregex' => 'Пароль regex',
	'externalcss' => 'Ссылка на внешний CSS файл',
	'greetingmsg' => 'Добро пожаловать %s!',
	'entryhelp' => 'Если это окно не обновится в течение %d секунд, Вам нужно включить автоматическое обновление (meta refresh) в вашем браузере. Также убедитесь в отстутствии веб-фильтра, проверьте настройки прокси, либо плагины браузера на блокировку автоматического обновления! Примеры плагинов: "Polipo", "NoScript", и т.д.<br>Тем не менее, (в случае ошибок перезагрузки страниц из-за сервера/прокси) вы всегда можете использовать кнопки внизу страницы для ручного обновления страницыы.',
	'enablegreeting' => 'Показывать приветственное сообщение перед остальными сообщениями',
	'unban' => 'Разблокировать',
	'sortupdown' => 'Сортировать сообщения сверху вниз',
	'sortframe' => 'Перестроить',
	'cs' => 'Регистр-чувствительный',
	'hidechatters' => 'Спрятать список людей в чате',
	'enfileupload' => 'Разрешить файловые загрузки',
	'msgattache' => 'Прикрепление',
	'filenotfound' => 'Файл не обнаружен!',
	'maxuploadsize' => 'Максимальный размер файла в КБ',
	'maxsize' => 'Макс. %d КБ',
	'cssupdate' => 'Заметка: по установлению CSS он тяжелый и можна убрать его в CSS настройках',
	'manualrefresh' => 'Требуется обновить страницу вручную',
	'personalnotes' => 'Личные заметки',
	'publicnotes' => ' Профиля пользователяь',
	'filtermodkick' => 'Применить фильтр исключения для модераторов',
	'namedoers' => 'Покажите, кто изгоняет людей или очищает все сообщения.',
];

