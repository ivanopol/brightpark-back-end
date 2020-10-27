<template>
    <footer class="block footer" v-bind:class="[ footer_class ]" itemscope itemtype="http://schema.org/Organization">
        <span class="hidden" itemprop="name">Брайт Парк</span>
        <span class="hidden" itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
            <img itemprop="contentUrl" src="/build/images/logo_bright_park_02.svg" alt="Logo">
              <meta itemprop="width" content="1007">
              <meta itemprop="height" content="125">
        </span>
        <span class="hidden"><link itemprop="url" :href="'https://brightpark.ru/' + cities.active.value"></span>
        <span class="hidden">
            <div itemscope itemtype="http://schema.org/AutoDealer">
                <span itemprop="email">{{cities.active.email}}</span>
                <time itemprop="openingHours" :datetime="cities.active.opening_hours.days.en + ', ' + cities.active.opening_hours.hours">{{cities.active.opening_hours.days.ru}}, {{cities.active.opening_hours.hours}}</time>
            </div>
        </span>
        <div class="block-text center mb">
            <h2><span class="c_orange">Брайт Парк </span> всегда на связи</h2>
            <p >Наш менеджер с&nbsp;удовольствием ответит на&nbsp;ваши вопросы по&nbsp;телефону&nbsp;<span itemprop="telephone" class="block callibri_tel">{{phone_formatted}}</span></p>
            <div class="footer-callback-wrap" v-show="!mobile">
                <a href="#" :id="page + '__footer__request-callback'" class="btn btn btn-primary btn-position green event" v-on:click.prevent="show('Заказать звонок', page + '__modal-footer-request-callback_', 'Отправить', 1, 'callback')" >Заказать звонок</a>
            </div>
            <div class="footer-call-wrap" v-show="mobile">
                <a :href="'tel:' + phone" :id="page + '__footer__call'" :data-goal="goal_call" @click="sendGoals(goal_call)" class="btn btn btn-primary btn-position green callibri_button event" v-if="mobile">Позвонить</a>
            </div>
            <p itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">Брайт парк ближе, чем кажется<br> <span itemprop="streetAddress">{{cities.active.address}}</span><br>
                <span itemscope itemtype="http://schema.org/LocalBusiness"><time itemprop="openingHours" :datetime="cities.active.opening_hours.days.en + ', ' + cities.active.opening_hours.hours">Ждем вас ежедневно с {{cities.active.opening_hours.hours_split.from}} до {{cities.active.opening_hours.hours_split.to}}</time></span>
            </p>

        </div>
        <yandex-map-component v-if="with_map" :coordinates='coordinates'
                              :button="ym_button"
                              :btn_class="ym_btn_class"
                              :prefix="'service__'"
        ></yandex-map-component>
        <modal name="form-callback-footer" height="auto" :adaptive="true" @before-open="beforeOpen">
            <div class="close" @click="hide"></div>
            <form-buy2-component :cities="cities"
                                 :form_title="form_title"
                                 :form_id="form_id"
                                 :button_text="button_text"
                                 :form_type="form_type"
                                 :goal="goal">
            </form-buy2-component>
        </modal>
    </footer>
</template>

<script>
    export default {
        name: "Footer",
        props: {
            cities: {
                type: Object
            },
            coordinates: {
                type: Array
            },
            phone: {
                type: String
            },
            phone_formatted: {
                default: '',
                type: String
            },
            goal_call: {
                default: '',
                type: String
            },
            ym_button: {
               default: false,
               type: Boolean
            },
            ym_btn_class: {
                default: '',
                type: String
            },
            footer_class: {
                default: '',
                type: String
            },
            page: {
                default: '',
                type: String
            },
            with_map: {
                default: true,
                type: Boolean
            }
        },
        data: function () {
            return {
                mobile: false,
                modalWidth: window.innerWidth -20,
                form_id: '',
                form_title: '',
                button_text: '',
                form_type: 1,
                goal: '',
            };
        },
        methods: {
            beforeOpen (event) {
            },
            show (title, form_id, button_text, form_type, goal) {
                this.form_title = title;
                this.form_id = form_id;
                this.button_text = button_text;
                this.form_type = form_type; // 1 - обычная форма, 2 - форма сервиса
                this.goal = goal;
                this.$modal.show('form-callback-footer');
                () => {
                    callibriInit();
                }
            },
            hide () {
                this.$modal.hide('form-callback-footer');
            },
            sendGoals: function (goal) {
                if (goal) {
                    let ym_ids = this.getCountersIds();
                    let goalArr = goal.match(/^(.+?):(.+?)$/);
                    let target_goal = goalArr === null ? goal : goalArr[2];

                    ym_ids.forEach(function (item, i, arr) {
                        window["yaCounter" + item].reachGoal(target_goal);
                    });
                }
            },
            getCountersIds: function () {
                var id_list = [];
                window.ym.a.forEach(function(item){
                    id_list.push(item[0]);
                });
                return id_list;
            },
            handleResize: function () {
                this.mobile = document.documentElement.clientWidth <= 580;
            },
        },
        components: {},
        mounted() {
            this.mobile = document.documentElement.clientWidth <= 580;
            window.addEventListener("resize", this.handleResize);
        },
        created () {
            this.modalWidth = window.innerWidth -20
        },
    }
</script>

<style scoped lang="scss">
    @media only screen and (min-width: 700px) and (max-width: 1365px) {
        .block {
            display: block;
        }
    }

    @media only screen and (min-width: 1366px) {
        .block {
           // display: unset;
        }
    }

    footer {
        &.block p {
            margin-bottom: 25px;
        }

        .footer-callback-wrap,
        .footer-call-wrap,
        .btn-place-wrap {
            margin-bottom: 40px;
        }

        h2 {
            span {
                display: inline;
            }
        }

        padding-bottom: 51px;

        .phone {
            border-bottom: 2px solid #b0c5dc;
            margin-bottom: -2px;
        }

        p {
            /*padding-top: 20px;*/
            font-family: PragmaticaLightCBold, Helvetica, sans-serif;
            font-size: 16px;
        }

        a {
            width: 80%;
        }

        @media only screen and (min-width: 580px) {
            a {
                width: auto;
            }

            &.block p {
                margin-bottom: 40px;
                font-size: 18px;
            }
        }
    }

    @media only screen and (min-width: 1025px) {
        footer {
            padding-bottom:0;
        }
    }
</style>
