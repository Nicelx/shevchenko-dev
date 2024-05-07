<?php
/*
Template Name: Контакты
Template Post Type:  page
*/

get_header();
?>
<div class="contacts wrapper">
    <h1 class="contacts__title">Контакты</h1>
    <p class="contacts__paragraph">Остались вопросы, напишите нам</p>
    <div class="contacts__main-block">
        <div class="contacts-info">
            <h2 class="contacts-info__title">Контактная информация</h2>
            <span class="contacts-info__sub-title">Say something to start a live chat!</span>
            <div class="contacts-info__item">
                <img class="contacts-info__svg"
                    src="<? echo get_site_url() . '/wp-content/uploads/2024/04/bxs_phone-call.svg' ?>" alt="">
                <a class="contacts-info__link" href="">+7(000)-000-00-00</a>
            </div>
            <div class="contacts-info__item">
                <img class="contacts-info__svg"
                    src="<? echo get_site_url() . '/wp-content/uploads/2024/04/ic_sharp-email.svg' ?>" alt="">
                <a class="contacts-info__link" href="">demo@gmail.com</a>
            </div>
            <div class="contacts-info__item">
                <img class="contacts-info__svg"
                    src="<? echo get_site_url() . '/wp-content/uploads/2024/04/carbon_location-filled.svg' ?>" alt="">
                <a class="contacts-info__link" href="">132 Dartmouth Street Boston, Massachusetts 02156 United
                    States</a>
            </div>
        </div>
        <div class="contacts__form">
            <form class="form" action="">
                <div class="form__inputs">
                    <label class="form__label" for="firstName">
                        Имя
                        <input class="form__input" type="text" id="firstName">
                    </label>
                    <label class="form__label" for="firstName">
                        Фамилия
                        <input class="form__input" type="text" id="firstName">
                    </label>
                    <label class="form__label" for="firstName">
                        Электронная почта
                        <input class="form__input" type="text" id="firstName">
                    </label>
                    <label class="form__label" for="firstName">
                        Телефон
                        <input class="form__input" type="text" id="firstName">
                    </label>
                </div>
                <label class="form__label" for="firstName">
                    Сообщение
                    <textarea class="form__text-area" type="textarea" id="firstName"></textarea>
                </label>
                <button class = "form__btn" type="submit">Отправить</button>
            </form>
        </div>
    </div>

</div>

<?php
get_footer();