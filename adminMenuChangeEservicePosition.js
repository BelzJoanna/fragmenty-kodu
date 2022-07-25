(() => { 
    let eservicesList = [];
    const eservicesSection = document.getElementById("eservices-section");
    if (typeof eservicesSection != 'undefined') {
        //wyłapuje wszystkie pozycje, które są eservisami plus wyłąpuje początek sekcji eusług
        const eservicesItems = document.querySelectorAll('li[id^="menu-posts-es_"] , li[id="eservices-section"]'); 
        
       for(let i=0; i<eservicesItems.length; i++){
           // sprawdza czy pętla doszła do początku sekcji eusług, jeżeli tak to przerywa zapisywanie id do tabeli pomocniczej i ignoruje pozostałe pozycje
           if(eservicesItems[i].id == 'eservices-section'){ 
               break;
           } else {
               eservicesList.push(eservicesItems[i].id);
           }
       }
        // wyłapuje koniec listy eserwisów
        const eservicesSettings = document.getElementById("toplevel_page_bona-eservice-settings"); 
        eservicesList.forEach((e)=>{
            const elementContent = document.getElementById(e);
            // wstawia eserwisy, które byłu poza seksą e-Usług na koniec listy eserwisów
            eservicesSettings.parentNode.insertBefore(elementContent,eservicesSettings); 
        });
    }
    
})();