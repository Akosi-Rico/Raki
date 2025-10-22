const scriptTag = document.currentScript;
const apiKey = scriptTag.getAttribute('data-api-key');
const tenantKey = scriptTag.getAttribute('data-tenant');

(() => {
    const API_URL = 'https://raki.test/api/verify-key';
    document.addEventListener('DOMContentLoaded', async () => {
        try {
            const response = await fetch(API_URL, {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ apiKey, tenantUrl: tenantKey })
            });

            const data = await response.json();
            if (!data.valid) return;

            const btn = document.createElement('div');
            Object.assign(btn.style, {
                position: 'fixed',
                bottom: '20px',
                right: '20px',
                padding: '10px 20px',
                borderRadius: '50px',
                cursor: 'grab',
                zIndex: '99999',
                fontFamily: 'sans-serif',
                display: 'flex',
                alignItems: 'center',
                gap: '8px',
                fontWeight: 'bold',
                fontSize: '16px',
                color: 'black',
                backdropFilter: 'blur(10px) saturate(180%)',
                background: 'rgba(255, 255, 255, 0.15)',
                border: '1px solid rgba(255, 255, 255, 0.2)',
                boxShadow: '0 4px 20px rgba(0,0,0,0.2)',
                transition: 'all 0.3s ease'
            });

            const icon = document.createElement('img');
            icon.src = 'https://raki.test/images/icon/sample2.png';
            icon.alt = 'Rocky Icon';
            Object.assign(icon.style, {
                width: '50px',
                height: '50px',
                borderRadius: '50%'
            });

            const label = document.createElement('span');
            label.textContent = "Hi I'm Raki!";

            btn.append(icon, label);
            document.body.appendChild(btn);

            const hoverOn = () => {
                Object.assign(btn.style, {
                    background: 'rgba(255, 255, 255, 0.25)',
                    transform: 'translateY(-2px)',
                    boxShadow: '0 10px 40px rgba(0, 0, 0, 0.4)'
                });
            };

            const hoverOff = () => {
                Object.assign(btn.style, {
                    background: 'rgba(255, 255, 255, 0.15)',
                    transform: 'translateY(0)',
                    boxShadow: '0 8px 32px rgba(0, 0, 0, 0.3)'
                });
            };

            btn.addEventListener('mouseenter', hoverOn);
            btn.addEventListener('mouseleave', hoverOff);

    
            const landing = 'https://raki.test';
            btn.addEventListener('click', () => window.open(landing, '_blank'));

            let isDragging = false;
            let startX, startY, startRight, startBottom;

            btn.addEventListener('mousedown', e => {
                isDragging = true;
                btn.style.cursor = 'grabbing';
                startX = e.clientX;
                startY = e.clientY;
                startRight = parseInt(window.getComputedStyle(btn).right, 10);
                startBottom = parseInt(window.getComputedStyle(btn).bottom, 10);
            });

            document.addEventListener('mousemove', e => {
                if (!isDragging) return;

                const dx = e.clientX - startX;
                const dy = e.clientY - startY;

                let newRight = startRight - dx;
                let newBottom = startBottom - dy;

                const maxRight = window.innerWidth - btn.offsetWidth - 10;
                const maxBottom = window.innerHeight - btn.offsetHeight - 10;

                newRight = Math.max(0, Math.min(newRight, maxRight));
                newBottom = Math.max(0, Math.min(newBottom, maxBottom));

                btn.style.right = `${newRight}px`;
                btn.style.bottom = `${newBottom}px`;
            });

            document.addEventListener('mouseup', () => {
                if (isDragging) {
                    isDragging = false;
                    btn.style.cursor = 'grab';
                }
            });
        } catch (err) {
            console.error('Widget Error:', err);
        }
    });
})();
