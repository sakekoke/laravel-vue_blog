<template>
    <div>
        <div class="uk-alert-danger" uk-alert v-if="error">
            <a class="uk-alert-close" uk-close></a>
            <p>Wrong input!</p>
        </div>
        <form style="margin-bottom: 20px;">
            <fieldset class="uk-fieldset">

                <legend class="uk-legend">Publish a post</legend>

                <div class="uk-margin">
                    <input class="uk-input" v-model="form.title" type="text" placeholder="Title">
                </div>

                <div class="uk-margin">
                    <textarea class="uk-textarea" v-model="form.body" rows="5" placeholder="Text"></textarea>
                </div>

                <button class="uk-button uk-button-primary" @click.prevent="store">
                    <div uk-spinner v-if="loading"></div>
                    <span v-else>Publish</span>
                </button>
            </fieldset>

        </form>
    </div>
</template>

<script>
    import axios from "axios";

    export default {
        components: {},
        data: () => ({
            form: {
                title: "",
                body: ""
            },
            loading: false,
            error: false
        }),
        methods: {
            store () {
                this.loading = true;
                axios.post('/api/posts', this.form, {
                    headers: {
                        "Content-type": "application/json"
                    }
                })
                .then(res => {
                    if (res.data.status) {
                        this.$router.push('/post/' + res.data.post.id);
                    } else {
                        setTimeout(()=> {
                            this.loading = false;
                        }, 500);
                        this.error = true;
                    }
                })
            }
        }
    }
</script>

<style scoped>
</style>
