/*
Handles language
* */
export default {
    changeHandler:[],//Handles language change
    lang:{name:"Язык",code:"ru",flag:"🇷🇺"},
    changeLanguage(lang) {
        this.lang = lang
        this.triggerLanguageChange(lang.code);
    },
    getLanguageCode(){
        return this.lang.code;
    },
    getLanguage(){
        return this.lang
    },

    onLanguageChange(func) {
        this.changeHandler.push(func)
    },

    triggerLanguageChange(lang){
      this.changeHandler.forEach((func)=>{func(lang)});
    }
}
