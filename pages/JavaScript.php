<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İş Günleri Listeleme</title>
</head>

<body>
    <label for="month">Ay:</label>
    <select id="month">
        <option value="1">Ocak</option>
        <option value="2">Şubat</option>
        <option value="3">Mart</option>
        <option value="4">Nisan</option>
        <option value="5">Mayıs</option>
        <option value="6">Haziran</option>
        <option value="7">Temmuz</option>
        <option value="8">Ağustos</option>
        <option value="9">Eylül</option>
        <option value="10">Ekim</option>
        <option value="11">Kasım</option>
        <option value="12">Aralık</option>
    </select>

    <label for="year">Yıl:</label>
    <select id="year"></select>

    <button onclick="listWorkDays()">İş Günlerini Listele</button>

    <div id="result"></div>
    <script>
            const yearSelect = document.getElementById("year");
            const currentYear = new Date().getFullYear();
            // +5 veya -5 yıl sınırlandırması ekledim
            for (let year = currentYear - 5; year <= currentYear + 5; year++) {
                const option = document.createElement("option");
                option.value = year;
                option.textContent = year;
                yearSelect.appendChild(option);
            }

            function listWorkDays() {
                const month = document.getElementById("month").value;
                const year = document.getElementById("year").value;

                const startDate = new Date(year, month - 1, 1);
                const endDate = new Date(year, month, 0);

                const resultDiv = document.getElementById("result");
                resultDiv.innerHTML = "";

                for (let day = startDate.getDate(); day <= endDate.getDate(); day++) {
                    const currentDate = new Date(year, month - 1, day);
                    const dayOfWeek = currentDate.getDay();

                    if (dayOfWeek !== 0 && dayOfWeek !== 6 && !isHoliday(currentDate)) {
                        resultDiv.textContent += day + ", ";
                    }
                }
            }

            function isHoliday(date) {
                const holidays = [
                    [1, 1], // 1 Ocak
                    [23, 4], // 23 Nisan
                    [19, 5], // 19 Mayıs
                    [15, 7], // 15 Temmuz
                    [30, 8], // 30 Ağustos
                    [29, 10], // 29 Ekim
                ];

                const day = date.getDate();
                const month = date.getMonth() + 1;

                for (const holiday of holidays) {
                    if (day === holiday[0] && month === holiday[1]) {
                        return true;
                    }
                }

                return false;
            }



    </script>


</body>

</html>