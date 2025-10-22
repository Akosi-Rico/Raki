(function() {
    const scriptTag = document.currentScript;
    const apiKey = scriptTag.getAttribute('data-api-key');
    const tenantKey = scriptTag.getAttribute('data-tenant');

    document.addEventListener('DOMContentLoaded', function() {
        fetch('https://testproject.test/api/verify-key', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ api_key: apiKey, _tenant: tenantKey})
        })
        .then(res => res.json())
        .then(data => {
            if (data.valid) {
                // create button
                const btn = document.createElement('div');
                btn.style.position = 'fixed';
                btn.style.bottom = '20px';
                btn.style.right = '20px';
                btn.style.padding = '10px 20px';
                btn.style.borderRadius = '50px';
                btn.style.cursor = 'grab';
                btn.style.zIndex = '99999';
                btn.style.fontFamily = 'sans-serif';
                btn.style.display = 'flex';
                btn.style.alignItems = 'center';
                btn.style.gap = '8px';
                btn.style.fontWeight = 'bold';
                btn.style.fontSize = '16px';
                btn.style.color = 'black';
                btn.style.backdropFilter = 'blur(10px) saturate(180%)';
                btn.style.background = 'rgba(255, 255, 255, 0.15)';
                btn.style.border = '1px solid rgba(255, 255, 255, 0.2)';
                btn.style.boxShadow = '0 4px 20px rgba(0,0,0,0.2)';
                btn.style.transition = 'all 0.3s ease';

                // icon
                const icon = document.createElement('img');
                //icon.src = 'https://testproject.test/images/icon/rocky.png';
                icon.src = 'https://testproject.test/images/icon/sample2.png';
                icon.alt = 'Rocky Icon';
                icon.style.width = '50px';
                icon.style.height = '50px';
                icon.style.borderRadius = '50%';

                const label = document.createElement('span');
                label.innerText = "Hi I'm Raki!";

                btn.appendChild(icon);
                btn.appendChild(label);
                document.body.appendChild(btn);

                // hover effect
                btn.addEventListener('mouseenter', () => {
                    btn.style.background = 'rgba(255, 255, 255, 0.25)';
                    btn.style.transform = 'translateY(-2px)';
                });
                btn.addEventListener('mouseleave', () => {
                    btn.style.background = 'rgba(255, 255, 255, 0.15)';
                    btn.style.transform = 'translateY(0)';
                });

                btn.addEventListener('click', () => {
                    alert('Attendance widget coming soon!');
                });


                // hover effect
                btn.addEventListener('mouseenter', () => {
                    btn.style.background = 'rgba(255, 255, 255, 0.2)';
                    btn.style.transform = 'translateY(-3px) scale(1.03)';
                    btn.style.boxShadow = '0 10px 40px rgba(0, 0, 0, 0.4)';
                });
                btn.addEventListener('mouseleave', () => {
                    btn.style.background = 'rgba(255, 255, 255, 0.1)';
                    btn.style.transform = 'translateY(0) scale(1)';
                    btn.style.boxShadow = '0 8px 32px rgba(0, 0, 0, 0.3)';
                });

                // make draggable (free movement)
                let isDragging = false;
                let startX, startY, startRight, startBottom;

                btn.addEventListener('mousedown', (e) => {
                    isDragging = true;
                    btn.style.cursor = 'grabbing';
                    startX = e.clientX;
                    startY = e.clientY;
                    startRight = parseInt(window.getComputedStyle(btn).right, 10);
                    startBottom = parseInt(window.getComputedStyle(btn).bottom, 10);
                });

                document.addEventListener('mousemove', (e) => {
                    if (!isDragging) return;
                    const dx = e.clientX - startX;
                    const dy = e.clientY - startY;
                    let newRight = startRight - dx;
                    let newBottom = startBottom - dy;

                    // prevent out of screen
                    const maxRight = window.innerWidth - btn.offsetWidth - 10;
                    const maxBottom = window.innerHeight - btn.offsetHeight - 10;
                    if (newRight < 0) newRight = 0;
                    if (newRight > maxRight) newRight = maxRight;
                    if (newBottom < 0) newBottom = 0;
                    if (newBottom > maxBottom) newBottom = maxBottom;

                    btn.style.right = `${newRight}px`;
                    btn.style.bottom = `${newBottom}px`;
                });

                document.addEventListener('mouseup', () => {
                    if (isDragging) {
                        isDragging = false;
                        btn.style.cursor = 'grab';
                    }
                });
            }
        })
        .catch(err => console.error('Widget Error:', err));
    });
})();
