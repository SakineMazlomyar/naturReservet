function update(url){
    $.ajax({
        type:'post',
        dataType:'json',
        url:'./result.php',
        success: (dat) => {
            window.location.href = "./result.php";
            if (dat) {
                console.log(dat)
            }else{
                console.log(dat)
            }
        },
        error: (dat, error) => {console.log( dat +  error)}
    });

    return false
}