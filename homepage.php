<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" />
    <title>HPbuilder</title>
    <style>
        body { margin: 0; font-family: serif; }
        ul { list-style: none; margin: 0; padding: 0;}
        li {list-style: none;}
        a { text-decoration: none; color: #000; }
        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(50px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        html { scroll-behavior: smooth; }
    </style>
</head>
<body>
    <?php
    $companies = [
        'company_name_ja' => 'php会社名',
        'company_name_eng' => 'phpCopmany',
    ];
    $services = [
        ['title' => 'phpサービスタイトル1', 'content' => 'phpサービス内容1', 'img_url' => './img/PC-SES.png'],
        ['title' => 'phpサービスタイトル2', 'content' => 'phpサービス内容2', 'img_url' => './img/PC-code.png'],
        ['title' => 'phpサービスタイトル3', 'content' => 'phpサービス内容1', 'img_url' => './img/PC-SES.png'],
        ['title' => 'phpサービスタイトル4', 'content' => 'phpサービス内容2', 'img_url' => './img/PC-code.png'],
    ];
    $news_list = ['phpNews1', 'phpNews2', 'phpNews3', 'phpNews4', 'phpNews5', 'phpNews6', 'phpNews7', 'phpNews8', 'phpNews9', 'phpNews10',];
    $company_data = [
        'slogan' => 'phpスローガン', 
        'company_mission' => '企業理念', 
        'ceo_greeting_title' => 'タイトル', 
        'ceo_greeting' => 'php代表挨拶',
        'ceo_last_name' => '苗字', 
        'ceo_last_name_reading' => 'みょうじ', 
        'ceo_first_name' => '名前', 
        'ceo_first_name_reading' => 'なまえ',
        'ceo_experience' => '代表者経歴',
        'officers' => '役員名',
        'postal_number' => '郵便番号',
        'address' => '住所',
        'phone_number' => '電話番号',
        'mail_address' => 'mail.addres@php',
        'buisiness_activeties' => '事業内容',
    ];

    include('header.html');
    include('toppage.html');
    include('about.html');
    include('news.html');
    include('greeting.html');
    include('suppliers.html');
    include('contact.html');
    include('company.html');
    include('footer.html');
    ?>
</body>
</html>

