<?php
?>
<div id="test" style="width:1000px;height:600px;"></div>
<script src="jquery.js"></script>
<script src="echarts.js"></script>
<script type="text/javascript">

    //通过 echarts.init 方法初始化一个 echarts 实例并通过 setOption 方法生成一个简单的柱状图

    //基于准备好的DOM，实例化echarts实例
    var myChart = echarts.init(document.getElementById("test"));

    var option = {
        legend: {                                   // 图例配置
            padding: 20,                             // 图例内边距，单位px，默认上下左右内边距为5
            itemGap: 20,                            // Legend各个item之间的间隔，横向布局时为水平间隔，纵向布局时为纵向间隔
            data: ['ios', 'android','wp']
        },
        tooltip: {                                  // 气泡提示配置
        trigger: 'item'                            // 触发类型，默认数据触发，可选为：'axis'
        },
        xAxis: [                                    // 直角坐标系中横轴数组
            {
                type: 'value',                      // 坐标轴类型，纵轴默认为数值轴，类目轴则参考xAxis说明
                boundaryGap: [0.0, 0.1],            // 坐标轴两端空白策略，数组内数值代表百分比
                splitNumber: 10                      // 数值轴用，分割段数，默认为5
            }
        ],
        yAxis: [                                    // 直角坐标系中纵轴数组

            {
                type: 'category',                   // 坐标轴类型，横轴默认为类目轴，数值轴则参考yAxis说明
                data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            }
        ],
        series: [
            {
                name: 'ios',                        // 系列名称
                type: 'bar',                       // 图表类型，折线图line、散点图scatter、柱状图bar、饼图pie、雷达图radar
                data:  [{value:235, name:'视频广告'},
                        {value:274, name:'联盟广告'},
                        {value:310, name:'邮件营销'},
                        {value:335, name:'直接访问'},
                        {value:335, name:'直接访问'},
                        {value:335, name:'直接访问'},
                        {value:335, name:'直接访问'},
                        {value:335, name:'直接访问'},
                        {value:335, name:'直接访问'},
                        {value:335, name:'直接访问'},
                        {value:335, name:'直接访问'},
                        {value:400, name:'搜索引擎'}],
                itemStyle: {
                    normal: {
                        // 阴影的大小
                        shadowBlur: 1000,
                        // 阴影水平方向上的偏移
                        shadowOffsetX: 5,
                        // 阴影垂直方向上的偏移
                        shadowOffsetY: 5,
                        // 阴影颜色
                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                    },
                    emphasis: {
                        shadowBlur: 500,
                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                    }
                }
            },
            {
                name: 'android',                    // 系列名称
                type: 'bar',                       // 图表类型，折线图line、散点图scatter、柱状图bar、饼图pie、雷达图radar
                data: [45, 123, 145, 526, 233, 343, 44, 829, 33, 123, 45, 13],
                itemStyle: {
                    normal: {
                        // 阴影的大小
                        shadowBlur: 200,
                        // 阴影水平方向上的偏移
                        shadowOffsetX: 5,
                        // 阴影垂直方向上的偏移
                        shadowOffsetY: 5,
                        // 阴影颜色
                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                    },
                    emphasis: {
                        shadowBlur: 40,
                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                    }
                }
            },
            {
                name:'wp',
                type:'bar',
                data:[90,90,90,90,90,90,90,90,90,90,90,90],
                itemStyle: {
                    normal: {
                        // 阴影的大小
                        shadowBlur: 200,
                        // 阴影水平方向上的偏移
                        shadowOffsetX: 5,
                        // 阴影垂直方向上的偏移
                        shadowOffsetY: 5,
                        // 阴影颜色
                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                    },
                    emphasis: {
                        shadowBlur: 40,
                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                    }
                }
            }

        ]

    };
    myChart.setOption(option);


</script>

