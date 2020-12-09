<template>
    <div class="uk-card uk-card-default uk-width-1-2@m">
        <div class="uk-card-header">
            <div class="uk-grid-small uk-flex-middle" uk-grid>
                <div class="uk-width-expand">
                    <h3 class="uk-card-title uk-margin-remove-bottom">{{ title }}</h3>
                    <p class="uk-text-meta uk-margin-remove-top">
                        <time datetime="2016-04-01">{{ date.substring(0,10) }}</time>
                    </p>
                </div>
            </div>
        </div>
        <div class="uk-card-body">
            <p v-if="body.length<100">{{ body }}</p>
            <p v-else>{{ body.substring(0,100)+"..." }}</p>
        </div>
        <div class="uk-card-footer">
            <router-link :to="{ name: 'info', params: { id: id }}" class="uk-button uk-button-text">Read more</router-link>
            <!-- <a href="#" class="uk-button uk-button-text">Read more</a> -->
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            title: {
                type: String,
                default: "NULL"
            },
            body: {
                type: String,
                default: "NULL"
            },
            date: {
                type: String,
                default: "NULL"
            },
            id: {
                type: Number,
                required: true
            }
        }
    }
</script>

<style scoped>
</style>
