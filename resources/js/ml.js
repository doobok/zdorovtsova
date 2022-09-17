import Vue from 'vue'
import {MLInstaller, MLCreate, MLanguage} from 'vue-multilanguage'

Vue.use(MLInstaller)

export default new MLCreate({
    initial: 'ru',
    languages: [
        new MLanguage('ru').create({
            leadFormTitle: 'Оставьте заявку и я с Вами свяжусь!',
            name: 'Имя',
            yourName: 'Ваше имя',
            enterName: 'укажите имя',
            phone: 'Номер телефона',
            enterPhone: 'введите действительный номер телефона',
            fillForm: 'заполните форму',
            continue: 'продолжить',
            formDemotivate: 'будьте спокойны, я никогда не передам номер телефона третьим лицам',
            ready: 'Готово',
            sendSuccess: 'Номер телефона успешно отправлен, ☎️ ожидайте звонка!',
            backToSite: 'Вернутся к просмотру сайта',
        }),

        new MLanguage('uk').create({
            leadFormTitle: 'Залишіть заявку і я зв\'яжуся з Вами!',
            name: 'Ім\'я',
            yourName: 'Ваше ім\'я',
            enterName: 'вкажіть ім\'я',
            phone: 'Номер телефону',
            enterPhone: 'введіть дійсний телефонний номер',
            fillForm: 'заповніть форму',
            continue: 'продовжити',
            formDemotivate: 'не турбуйтесь, я ніколи не передам номер телефону третім особам',
            ready: 'Готово',
            sendSuccess: 'Номер телефону успішно надіслано, ☎️ очікуйте дзвінка!',
            backToSite: 'Повернутись до перегляду сайту',
        }),

    ]
})
