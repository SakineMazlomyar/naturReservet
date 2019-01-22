function update(url){
    $.ajax({
        type:'post',
        dataType:'json',
        url:'./testing.php',
        success: (dat) => {
            if (dat) {
                console.log(dat)
            }else{
                console.log(dat)
            }
        },
        error: (dat, error) => {console.log( dat +  error)}
    });
}