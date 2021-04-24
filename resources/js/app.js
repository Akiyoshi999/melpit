require('./bootstrap');

document.querySelector('.image-picker inout')
    .addEventListener('change', (e) => {
        // 画像が選択された時の処理を記述
        const input = e.target
        const reader = new FileReader();
        reader.onload = (e) => {
            // 画像の読込が完了した後の処理
            input.closest('.image-picker').querySelector('img').srt = e.target.result
        }
        reader.readAsDataURL(input.files[0])
    })