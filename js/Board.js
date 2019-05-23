$(function() {

    $.ajax({

        url:'/getBoardList.php',
        method:'get',
        success:function(data) {
            alert(data.msg);
            if(data.success) {

                $(".board-list").empty();

                let list = data.data;
                
                list.forEach(x => {
                    $(".board-list").append(setBoard(x));
                });

            }
        }

    });

});

function setBoard(board) {

    return `<div class="boards">
                <div class="num">
                    ${board.num}
                </div>
                <div class="title">
                    <a href="/getboard.php">${board.title}</a>
                </div>
                <div class="writer">
                    ${board.writer}
                </div>
                <div class="date">
                    ${board.date}
                </div>
                <div class="cnt">
                    ${board.cnt}
                </div>
            </div>`;
}