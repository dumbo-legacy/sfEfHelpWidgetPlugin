$(function(){
    $('.efhelp').each(function(){          
        $("#"+ $(this).attr("effield")).bt({
          trigger: ['focus', 'blur'],
          contentSelector: "$('div[effield='+ $(this).attr('id') +']')",
          centerPointY: .1,
          positions: ['right', 'left'], 
          padding: 0, 
          width: 256, 
          spikeGirth: 60, 
          spikeLength: 50, 
          cornerRadius: 10, 
          fill: '#FFF', 
          strokeStyle: '#B9090B', 
          shadow: true, 
          shadowBlur: 12,
          shadowOffsetX: 0,
          shadowOffsetY: 5, 
          hoverIntentOpts: {interval: 800, timeout: 0}, 
          cssStyles: {
            fontSize: '12px',
            fontFamily: 'arial,helvetica,sans-serif'
          }              
        })
    })
})
