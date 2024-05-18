var options = {
    chart: {
        height: 380,
        type: "bar", //line before
        zoom: { enabled: !1 },
        toolbar: { show: !1 },
    },
    colors: ["#0f9cf3", "#1cbb8c"],
    dataLabels: { enabled: !1 },
    stroke: { width: [3, 3], curve: "straight" },
    series: [
        { name: "High - 2024", data: [300, 433, 377, , 33, 31, 33] },
        { name: "Low - 2024", data: [240, 166, 180, 12, 17, 13, 12] },
    ],
    title: { text: "", align: "left" },
    grid: {
        row: { colors: ["transparent", "transparent"], opacity: 0.2 },
        borderColor: "#f1f1f1",
    },
    markers: { style: "inverted", size: 6 },
    xaxis: {
        categories: ["Marketing", "finance", "IT"],
        title: { text: "Departments" },
    },
    yaxis: { title: { text: "Candidates" }, min: 10, max: 500 },
    legend: {
        position: "top",
        horizontalAlign: "right",
        floating: !0,
        offsetY: -25,
        offsetX: -5,
    },
    responsive: [
        {
            breakpoint: 600,
            options: {
                chart: { toolbar: { show: !1 } },
                legend: { show: !1 },
            },
        },
    ],
}
