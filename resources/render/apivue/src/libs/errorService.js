/* eslint-disable */
import dataProvider from "@/libs/dataProvider";
import languageProvider from "@/libs/languageProvider";

export default {
    toast:false,//toaster
    errorData:[],
    generateErrorMessage(){
        console.log('error generated');
        this.toast.open('Howdy!');
    },

    async getData(){
        if (this.errorData == []){
            return this.errorData;
        }
        this.errorData =await dataProvider.getErrors(languageProvider.getLanguageCode());
       
        //return await dataService.getErrors()
        return this.errorData;
    }
}
