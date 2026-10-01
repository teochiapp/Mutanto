Los usuarios quieren hacer un pequeño cambio de diseño en el Header y en algunas secciones de la web

Solo en https://mutanto.com.ar/en/marketing/

En cuanto al header, quieren que el menu sea diferente.
En la imagen se muestra como está actualmente y como quieren que quede.

En resumidas cuentas, el boton de Contact Us pasa a estar a la izquierda y cambia el display del mismo.. El botón iria al Whatsapp como esta ahora pero el mail iria a la pagina de contacto.

Ademas voy a proporcionar el CSS preciso del figma para usar el mismo

/* Frame 1171275763 */

/* Auto layout */
display: flex;
flex-direction: row;
align-items: center;
padding: 0px;
gap: 16px;

width: 477px;
height: 44px;


/* Inside auto layout */
flex: none;
order: 2;
flex-grow: 0;


/* Contact us */

width: 77px;
height: 20px;

font-family: 'Poppins';
font-style: normal;
font-weight: 400;
font-size: 14px;
line-height: 20px;
/* identical to box height, or 143% */
text-align: center;

color: #FFFFFF;


/* Inside auto layout */
flex: none;
order: 0;
flex-grow: 0;


/* CtaButton */

box-sizing: border-box;

/* Auto layout */
display: flex;
flex-direction: row;
justify-content: center;
align-items: center;
padding: 12px;
gap: 12px;

width: 50px;
height: 44px;

border: 1px solid #84FF5F;
border-radius: 16px;

/* Inside auto layout */
flex: none;
order: 1;
flex-grow: 0;


/* lucide/mail */

width: 24px;
height: 24px;


/* Inside auto layout */
flex: none;
order: 0;
flex-grow: 0;


/* Vector */

position: absolute;
left: 8.33%;
right: 8.33%;
top: 16.67%;
bottom: 16.67%;

border: 2px solid #84FF5F;


/* CtaButton */

box-sizing: border-box;

/* Auto layout */
display: flex;
flex-direction: row;
justify-content: center;
align-items: center;
padding: 12px;
gap: 12px;

width: 57px;
height: 44px;

border: 1px solid #84FF5F;
border-radius: 16px;

/* Inside auto layout */
flex: none;
order: 2;
flex-grow: 0;


/* HOVER_WP */

width: 31px;
height: 31px;


/* Inside auto layout */
flex: none;
order: 0;
flex-grow: 0;


/* vector */

position: absolute;
left: 12.5%;
right: 12.5%;
top: 13.71%;
bottom: 13.71%;

background: #84FF5F;


/* CtaButton */

/* Auto layout */
display: flex;
flex-direction: row;
align-items: center;
padding: 12px 24px;
gap: 8px;

width: 245px;
height: 44px;

background: #84FF5F;
border-radius: 16px;

/* Inside auto layout */
flex: none;
order: 3;
flex-grow: 0;


/* Book a free 30-min call */

width: 165px;
height: 20px;

font-family: 'Poppins';
font-style: normal;
font-weight: 600;
font-size: 14px;
line-height: 20px;
/* identical to box height, or 143% */
text-align: center;

color: #101010;


/* Inside auto layout */
flex: none;
order: 0;
flex-grow: 0;


/* lucide/arrow-up-right */

width: 24px;
height: 24px;


/* Inside auto layout */
flex: none;
order: 1;
flex-grow: 0;


/* Vector */

position: absolute;
left: 29.17%;
right: 29.17%;
top: 29.17%;
bottom: 29.17%;

border: 2px solid #000000;


/* Frame 1171275763 */

/* Auto layout */
display: flex;
flex-direction: row;
align-items: center;
padding: 0px;
gap: 16px;

width: 477px;
height: 44px;


/* Inside auto layout */
flex: none;
order: 2;
flex-grow: 0;


/* Contact us */

width: 77px;
height: 20px;

font-family: 'Poppins';
font-style: normal;
font-weight: 400;
font-size: 14px;
line-height: 20px;
/* identical to box height, or 143% */
text-align: center;

color: #FFFFFF;


/* Inside auto layout */
flex: none;
order: 0;
flex-grow: 0;


/* CtaButton */

box-sizing: border-box;

/* Auto layout */
display: flex;
flex-direction: row;
justify-content: center;
align-items: center;
padding: 12px;
gap: 12px;

width: 50px;
height: 44px;

border: 1px solid #84FF5F;
border-radius: 16px;

/* Inside auto layout */
flex: none;
order: 1;
flex-grow: 0;


/* lucide/mail */

width: 24px;
height: 24px;


/* Inside auto layout */
flex: none;
order: 0;
flex-grow: 0;


/* Vector */

position: absolute;
left: 8.33%;
right: 8.33%;
top: 16.67%;
bottom: 16.67%;

border: 2px solid #000000;


/* CtaButton */

box-sizing: border-box;

/* Auto layout */
display: flex;
flex-direction: row;
justify-content: center;
align-items: center;
padding: 12px;
gap: 12px;

width: 57px;
height: 44px;

border: 1px solid #84FF5F;
border-radius: 16px;

/* Inside auto layout */
flex: none;
order: 2;
flex-grow: 0;


/* HOVER_WP */

width: 31px;
height: 31px;


/* Inside auto layout */
flex: none;
order: 0;
flex-grow: 0;


/* CtaButton */

/* Auto layout */
display: flex;
flex-direction: row;
align-items: center;
padding: 12px 24px;
gap: 8px;

width: 245px;
height: 44px;

background: #84FF5F;
border-radius: 16px;

/* Inside auto layout */
flex: none;
order: 3;
flex-grow: 0;


/* Book a free 30-min call */

width: 165px;
height: 20px;

font-family: 'Poppins';
font-style: normal;
font-weight: 600;
font-size: 14px;
line-height: 20px;
/* identical to box height, or 143% */
text-align: center;

color: #101010;


/* Inside auto layout */
flex: none;
order: 0;
flex-grow: 0;


/* lucide/arrow-up-right */

width: 24px;
height: 24px;


/* Inside auto layout */
flex: none;
order: 1;
flex-grow: 0;


/* Vector */

position: absolute;
left: 29.17%;
right: 29.17%;
top: 29.17%;
bottom: 29.17%;

border: 2px solid #000000;


/* Frame 1171275763 */

/* Auto layout */
display: flex;
flex-direction: row;
align-items: center;
padding: 0px;
gap: 16px;

width: 477px;
height: 44px;


/* Inside auto layout */
flex: none;
order: 2;
flex-grow: 0;


/* Contact us */

width: 77px;
height: 20px;

font-family: 'Poppins';
font-style: normal;
font-weight: 400;
font-size: 14px;
line-height: 20px;
/* identical to box height, or 143% */
text-align: center;

color: #FFFFFF;


/* Inside auto layout */
flex: none;
order: 0;
flex-grow: 0;


/* CtaButton */

box-sizing: border-box;

/* Auto layout */
display: flex;
flex-direction: row;
justify-content: center;
align-items: center;
padding: 12px;
gap: 12px;

width: 50px;
height: 44px;

border: 1px solid #84FF5F;
border-radius: 16px;

/* Inside auto layout */
flex: none;
order: 1;
flex-grow: 0;


/* lucide/mail */

width: 24px;
height: 24px;


/* Inside auto layout */
flex: none;
order: 0;
flex-grow: 0;


/* Vector */

position: absolute;
left: 8.33%;
right: 8.33%;
top: 16.67%;
bottom: 16.67%;

border: 2px solid #000000;


/* CtaButton */

box-sizing: border-box;

/* Auto layout */
display: flex;
flex-direction: row;
justify-content: center;
align-items: center;
padding: 12px;
gap: 12px;

width: 57px;
height: 44px;

border: 1px solid #84FF5F;
border-radius: 16px;

/* Inside auto layout */
flex: none;
order: 2;
flex-grow: 0;


/* HOVER_WP */

width: 31px;
height: 31px;


/* Inside auto layout */
flex: none;
order: 0;
flex-grow: 0;


/* CtaButton */

/* Auto layout */
display: flex;
flex-direction: row;
align-items: center;
padding: 12px 24px;
gap: 8px;

width: 245px;
height: 44px;

background: #84FF5F;
border-radius: 16px;

/* Inside auto layout */
flex: none;
order: 3;
flex-grow: 0;


/* Book a free 30-min call */

width: 165px;
height: 20px;

font-family: 'Poppins';
font-style: normal;
font-weight: 600;
font-size: 14px;
line-height: 20px;
/* identical to box height, or 143% */
text-align: center;

color: #101010;


/* Inside auto layout */
flex: none;
order: 0;
flex-grow: 0;


/* lucide/arrow-up-right */

width: 24px;
height: 24px;


/* Inside auto layout */
flex: none;
order: 1;
flex-grow: 0;


/* Vector */

position: absolute;
left: 29.17%;
right: 29.17%;
top: 29.17%;
bottom: 29.17%;

border: 2px solid #000000;
