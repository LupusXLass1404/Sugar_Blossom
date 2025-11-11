function showModal(url) {
    $('#exampleModal').modal('show');
    $('#modal-load').load(url)
    // $('modal-body').load(url);
}

function formFail() {
    const errorId = document.getElementById('error');

    errorId.classList.remove('shake'); // 確保可以重複觸發
    void errorId.offsetWidth; // 觸發重排
    errorId.classList.add('shake');
}