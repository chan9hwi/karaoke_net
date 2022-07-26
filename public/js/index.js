$(function () {
    getInitMessages();
    function getInitMessages(pass) {
        console.log('getInitMessages: ' + pass);
        $('#messages .special').html('<div><a href="video.php?url=premiumlive2022">見る会</a></div>');
        // $.ajax('https://xn--u9jj8904a.xn--kckbt6t.net/messages/getInitMessages',
        //     {
        //         type: 'get',
        //         data: { query: $('#keyword').val() },
        //         dataType: 'xml'
        //     }
        // )
        //     // 検索成功時にはページに結果を反映
        //     .done(function (data) {
        //         $('#messages').html('messages');
        //     })
        //     // 検索失敗時には、その旨をダイアログ表示
        //     .fail(function () {
        //         window.alert('正しい結果を得られませんでした。');
        //     });
    }
});