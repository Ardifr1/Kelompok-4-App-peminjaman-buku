let active = false;

function toggleSelect(){

    const actionColumn = document.getElementById("actionColumn");

    active = !active;

    if(active){
        actionColumn.style.display = "flex";
    }else{
        actionColumn.style.display = "none";
    }
 console.log("berhasil terhubung ke js");
}
