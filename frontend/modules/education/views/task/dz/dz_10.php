<?php

/** @var yii\web\View $this */
/** @var integer $task id task */


use yii\helpers\Html;
use yii\helpers\Url;

$this->title =  'Вставить элемент в центр списка';
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="d-flex align-items-center pb-3 mb-5 border-bottom">
    <h1><?= $this->title; ?></h1>
</section>

<div>
    <p>
        <b>Домашнее задание</b>
        <ol>
            <li>Реализуйте возможность добавлять к контакту несколько дат с выбором типа: день рождения, день профессии, день первой встречи (можете дополнить или поменять перечень). Используйте для выбора типа даты элемент &lt;select&gt;.</li>
            <li>Реализуйте возможность загружать несколько файлов с подписями каждого из них. Содержание подписи не ограничивается (&lt;textarea&gt;).</li>
            <li>Реализуйте возможность удалять добавленные элементы (пп.1-2) каждый по отдельности.</li>
            <li>Проверьте функциональность формы, убедитесь, что все данные, в т. ч. от добавленных элементов, передаются при отправке формы (попадают в адресную строку браузера).</li>
        </ol>
    </p>
    <p>
        <b>Вопросы к домашнему заданию</b>
        <ol>
            <li>Раскройте последовательность действий для добавления нового элемента в форму?</li>
            <li>Чем отличаются методы <b>appendChild</b> и <b>insertBefore</b>?</li>
            <li>Для чего нужен механизм клонирования элементов? Какой порядок создания клона?</li>
            <li>Как задать или поменять имя нового созданного элемента? Как установить ему обработчик события?</li>
            <li>Как исключить (удалить) элемент из формы?</li>
        </ol>
    </p>

    <?php if($task): ?>
        <p>
            Ссылка на предыдушую работу.
            <a href="<?= Url::to(['/education/task/template', 'id' => $task]) ?>">Перейти</a>
        </p>
    <?php endif; ?>
</div>
<hr>
