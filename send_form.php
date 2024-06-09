<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gender = $_POST['gender'];
    $age = $_POST['Age'];
    $activityType = $_POST['type of activity'];
    $income = $_POST['income'];
    $citizenship = $_POST['citizenship'];
    // Добавьте остальные поля аналогичным образом

    $to = 'kugisaki02@mail.ru'; // Замените на ваш реальный email
    $subject = 'Анкета оценки спроса на велотур';
    $message = "Пол: $gender\nВозраст: $age\nРод деятельности: $activityType\nДоход: $income\nГражданство: $citizenship\n"; // Добавьте остальные поля аналогичным образом
    $headers = 'From: kugisaki02@mail.ru' . "\r\n" . // Замените на ваш реальный email
               'Reply-To: kugisaki02@mail.ru' . "\r\n" . // Замените на ваш реальный email
               'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo "Спасибо за участие в анкетировании!";
    } else {
        echo "Произошла ошибка при отправке анкеты.";
    }
} else {
    // Не POST запрос
    echo "Анкета не отправлена.";
}
?>