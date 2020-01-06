const app = new Vue({
    el: '#app',
    data: {
        errors: [],
        name: null,
        date: null,
        email: null,
        tel: null,
        codeExperience: null,
        whyToCode: null
    },
    methods:{
        checkForm: function (e) {
            if (this.name && this.date && this.email && this.tel && this.codeExperience&& this.whyToCode) {
                alert('Thank you!\nYour application is now waiting for an approval.');
            }

            this.errors = [];

            if (!this.name) {
                this.errors.push('Full name required.');
            }

            if (!this.date) {
                this.errors.push('Date of birth required.');
            }

            if (!this.email) {
                this.errors.push('E-mail required.');
            }

            if (!this.tel) {
                this.errors.push('Phone number required.');
            }

            if (!this.codeExperience) {
                this.errors.push('Answer required.');
            }

            if (!this.whyToCode) {
                this.errors.push('Answer required.');
            }

            e.preventDefault();
        }
    }
})
mybutton = document.getElementById("myBtn");
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}