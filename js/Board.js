$(function() {

    $.ajax({

        url:'/getBoardList.php',
        method:'get',
        success:function(data) {
            if(data.success) {

                $(".board-list").empty();

                let list = data.list;

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
                    <a href="/content.php?num=${board.num}">${board.title}</a>
                </div>
                <div class="writer">
                    ${board.writer} (${board.id})
                </div>
                <div class="date">
                    ${board.date}
                </div>
                <div class="cnt">
                    ${board.cnt}
                </div>
            </div>`;
}