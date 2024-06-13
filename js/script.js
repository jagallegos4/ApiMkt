let url = '../interfaces.php';

fetch(url)
.then(response =>response.json())
.then(data => mostrarData(data))
.catch(error => console.log('error en el fetch: '+error));

const mostrarData = (data) => {
    console.log(data);
}