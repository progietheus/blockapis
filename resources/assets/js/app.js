/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('bulma');
window.Vue = require('vue');
require('vue-resource');
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',
    mounted: function () {
        this.init();
    },
    data: {
        endpoint: '',
        response: "{}",
        apiKey: '',
        secretKey: ''
    },
    methods: {
        init: function () {
        },
        clearResults: function () {
            this.response = "{}";
        },
        initRequest: function (type, endpoint, parameters) {
            parameters = parameters || 0;

            switch (type) {
                case 'get':
                    if (!parameters) {
                        app.$http.get('/api/request?type='+type+'&endpoint='+endpoint).then(function (response) {
                                this.response = JSON.stringify(response.body);
                            },
                            function (response) {
                                alert('failed');
                                this.response = response;
                            });
                    } else {
                        this.$http.get(endpoint, {
                            params: parameters
                        }).then(function (response) {
                                this.response = response;
                            },
                            function (response) {
                                alert('failed');
                                this.response = response;
                            });
                    }
                    break;
                case 'post':
                    break;
                case 'update':
                    break;
                case 'delete':
                    break;
                case 'put':
                    break;
                default:
            }
        }
    }
});
