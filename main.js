let myForm = document.querySelector("#myForm")

myForm.addEventListener("submit", async(e) => {
    e.preventDefault()
    let myHeader = new Headers({"Content-Type":"application/json"})
    let data = Object.fromEntries(new FormData(e.target))
    let config = {
        method:"POST", 
        headers: myHeader, 
        body: JSON.stringify(data)
    };
    let resultado = await(await fetch("api3.php", config)).text();
    document.querySelector("pre").innerHTML = resultado;
})
