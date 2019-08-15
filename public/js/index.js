var app = new Vue({ 
    el: '#app',
    data: {
        message: 'Hello Vue!',
        link: 'https://www.baidu.com',
        name: 'allen',
        age: 26
    },
    methods: {
    	sayHello: function() {
    		this.message = 'allen';
    		return this.message;
    	},
    	random: function() {
    		return Math.random();
    	},
    	random2: function() {
    		return Math.floor(Math.random() * 100);
    	}
    }
});