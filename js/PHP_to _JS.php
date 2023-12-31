<script>
    const week = ["日","月","火","水","木","金","土"];
    const today = new Date();

    var showDate = new Date(today.getFullYear(), today.getMonth(),1);

    //初期表示
    window.onload = function() {
        showProcess(today,calendar);
    };

    //前の月表示
    function prev(){
        showDate.setMonth(showDate.getMonth() -1);
        showProcess(showDate);
    }

    //次の月表示
    function next(){
        showDate.setMonth(showDate.getMonth() + 1);
        showProcess(showDate);
    }

    //HTMLにカレンダー表示
    function showProcess(date) {
        var year = date.getFullYear();
        var month = date.getMonth();
        document.querySelector('#header').innerHTML = year + "年" + (month + 1)+ "月";

        var calendar = createProcess(year,month);
        document.querySelector('#calendar').innerHTML = calendar;
    }

    function createProcess(year,month) {
        //曜日
        var calendar = "<table><tr class='dayOfWeek'>";
        for (var i = 0; i < week.length; i++) {
            calendar += "<th>" + week[i] + "</th>";
        }
        calendar += "</tr>";

        var count = 0;
        var startDayOfWeek = new Date(year,month,1).getDay();
        var endDate = new Date(year,month + 1,0).getDate();
        var lastMonthEndDate = new Date(year,month,0).getDate();
        var row = Math.ceil((startDayOfWeek + endDate)/week.length);
        
        //変数のデバッグ用コード
        // console.log(startDayOfWeek);
        // console.log(endDate);
        // console.log(week.length);
        // console.log(row);

    
        //１行ずつ設定
        for (var i = 0; i < row; i++) {
            calendar += "<tr>";
            //1column単位で設定 
            //条件は「1行目、かつ、1日の曜日未満」の場合に57行目の処理を行う
            for(var j = 0; j < week.length; j++){
                if (i == 0 && j < startDayOfWeek) {
                    calendar += "<td class='disabled'>" + (lastMonthEndDate - startDayOfWeek + j + 1) + "</td>";
                } else if (count >= endDate) {
                    //最終行で最終日以降、翌日の日付を設定
                    count++;
                    calendar += "<td class='disabled'>" + (count -endDate) + "</td>";
                } else {
                    //当日の日付を曜日に照らし合わせて設定
                    count++;
                    if (year == today.getFullYear() && month == (today.getMonth()) && count == today.getDate()){
                        calendar += "<td class='today'>" + count + "</td>";
                    } else {
                        calendar += "<td>" + count + "</td>";
                    }
                }
            }
            calendar += "</tr>"
        }
        return calendar;
    }

</script>   
