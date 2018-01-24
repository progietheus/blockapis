/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

window.Vue = require('vue');
require('vue-resource');
require("font-awesome-webpack");
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.mixin({
    methods: {
        compile: function (content, element) {
            var tmp = Vue.extend({
                template: content
            });
            new tmp().$mount(element);
        },
        stopLoading: function () {
            document.getElementsByClassName('is-loading')[0].classList.remove('is-loading');
        },
        initRequest: function (e, type, endpoint, exchange) {
            e.currentTarget.classList.add('is-loading');
            switch (type) {
                case 'get':
                    app.$http.get('/api/request?type=' + type + '&endpoint=' + endpoint + '&exchange=' + exchange).then(function (response) {
                            this.response = JSON.stringify(response.body, 0, 2);
                            this.stopLoading()
                        },
                        function (response) {
                            alert('failed');
                            this.stopLoading()
                            this.response = response;
                        });
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

var app = new Vue({
    el: '#app',
    mounted: function () {
        this.appendExecuteBtn();

    },
    data: {
        endpoint: '',
        response: "No Results",
        apiKey: '',
        secretKey: ''
    },
    methods: {
        appendExecuteBtn: function () {
            var endpoints = document.getElementsByClassName('enpoint');
            for (let i = 0; i < endpoints.length; i++) {
                var item = endpoints.item(i);
                var endpoint = item.dataset.endpoint;
                var exchange = item.dataset.exchange;
                var button = document.createElement('a');
                button.classList.add("button", "execute-btn", "is-info", "is-outlined");
                button.innerHTML = "Execute";
                button.setAttribute("v-on:click", "initRequest($event,'get','" + endpoint + "','" + exchange + "')");
                button.id = endpoint;
                item.append(button);
                var appendedButton = item.getElementsByClassName('execute-btn')[0];
                this.compile(button.outerHTML, appendedButton);
            }
        },
        replay: function () {
            //s
        },
        clearResults: function () {
            this.response = "Nothing yet!";
        },
    }
});
