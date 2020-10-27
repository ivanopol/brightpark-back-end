<template>

</template>

<script>
    import axios from "axios";

    export default {
        name: "EventHandlerComponent",
        data: () => ({

        }),
        methods: {
            async sendData(data, href) {
                axios({
                    method: 'post',
                    url: '/api/write_event',
                    data: data
                }).then((response) => {

                    if (href !== '#' && href !== null) {
                        window.location = href;
                    }
                });
            },
            checkEvent(e) {
                let has_class = false
                for (let i = 0; i < e.target.classList.length; i++) {
                    if ('event' === e.target.classList[i]) {
                        has_class = true
                        break
                    }
                }
                return has_class
            },
            addHandler() {
                let handle = async (e) => {
                    let classList = e.target.classList;
                    let id = e.target.id;
                    let href = null;
                    let bubble = false;
                   // console.log(e);

                    if (e.target.classList.contains('bubble')) {
                        e.path.forEach((current, index, array) => {
                            if (current.classList !== undefined && current.classList.contains('event')) {
                                 id = current.id;
                                 href = current.href ? current.href : null ;
                                 bubble = true;
                            }
                        });
                    }

                    if (e.target.href) {
                        e.preventDefault();
                        href = e.target.attributes.href.value;
                    } else if (bubble) {
                        e.preventDefault();
                    }

                    let is_event = bubble ? true : this.checkEvent(e);

                    if (!is_event) {
                        return false;
                    }

                    let data = {
                        'btn_id': id,
                        'href': href,
                        'location': window.location.pathname,
                        'timestamp': new Date().toISOString(),
                        'event_type': 'button'
                    };
                    await this.sendData(data, href);
                };

                document.addEventListener('click', handle, false);
            }
        },
        mounted() {
            this.addHandler()
        },
        destroyed() {
        }
    }
</script>

<style scoped>

</style>
