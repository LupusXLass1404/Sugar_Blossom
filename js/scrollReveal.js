ScrollReveal().reveal('.slid-left', {
    origin: 'left',    // 從左邊滑入
    distance: '100px', // 滑入距離
    duration: 1000,    // 動畫時間 (毫秒)
    delay: 200,        // 延遲開始 (毫秒)
    opacity: 0,        // 從透明變清晰
    easing: 'ease-out'
});

ScrollReveal().reveal('.slid-right', {
    origin: 'right',
    distance: '100px',
    duration: 1000,
    delay: 200,
    opacity: 0,
    easing: 'ease-out'
});


ScrollReveal().reveal('.slid-top', {
    origin: 'top',          // 從上方出現
    distance: '100px',      // 滑入距離
    duration: 1000,         // 動畫時間 (毫秒)
    delay: 200,             // 延遲開始 (毫秒)
    opacity: 0,             // 從透明變清晰
    easing: 'ease-out'      // 動畫緩動
});


ScrollReveal().reveal('.slid-down', {
    origin: 'bottom',       // 從下方出現
    distance: '100px',
    duration: 1000,
    delay: 200,
    opacity: 0,
    easing: 'ease-out'
});