function executor(action){
    if (action === 1) {
        location.href = "index"
    } else if (action === 2) {
        Cookies.set('Allowed', 'allowed')
        location.href = "index"
    } else if (action === 3) {
        location.href="index?serve=morecookieinfo"
    }else if (action === 4) {
        location.href = "index?serve=gegevens"
    }else if(action === 5){
        Cookies.set('serve','end')
    }
}