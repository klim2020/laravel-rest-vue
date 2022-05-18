export default {
    toast:false,//toaster
    generateErrorMessage(){
        console.log('error generated');
        this.toast.open('Howdy!');
    }
}
