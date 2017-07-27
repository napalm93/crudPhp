function patente( paten ) {
    expr = /^[a-z]{2}[\.\- ]?[0-9]{2}[\.\- ]?[0-9]{2}|[b-d,f-h,j-l,p,r-t,v-z]{2}[\-\. ]?[b-d,f-h,j-l,p,r-t,v-z]{2}[\.\- ]?[0-9]{2}$/i;
    if ( !expr.test(paten) ){
        alert("Error: La patente " + paten + " es incorrecta.");
    }
}