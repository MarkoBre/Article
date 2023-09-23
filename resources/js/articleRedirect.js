export default () => ({
    id: '',

    redirect() {
        window.location.href += '/' + this.id;
    }
})
