# Pirate-Rogue-child-Refresh-2020

_under construction_

Child-Theme for Pirate-Rogue (https://github.com/Piratenpartei/Pirate-Rogue). Refresh 2020 des [EU Updates](https://github.com/stoppegp/Pirate-Rogue-child-eu19).

## Changelog (2020)

* Leichte Anpassungen im CSS 
* AMR Kalender Layout angepasst
* Blogbeiträge zentriert und entzerrt
* Automatisches Image-Scaling bei Blogbeiträgen
* Leerräume bei Boxen minimiert
* disabled sidebar in posts (it looks aweful)
    * Piraten Crew jetzt bitte im Inhalt platzieren, wenn weiterhin gewünscht (über Customizer)
    * Ich empfehle die Listen-Ansicht zu benutzen
* `small-pictures` Klasse für Bilder in Seiten hinzugefügt die nur als schmaler Streifen angezeigt werden sollen 
* `blogroll` und `section_featured_top` angepasst
* `[flexrow]Content[/flexrow]` eingeführt, damit werden alle Elemente in einer Flexrow angezeigt
* `[topicrect url="" title="" image=""]Kurzer Text[/topicrect]` eingeführt.
* `[fancytitle title="Title"]` eingeführt

## Shortcuts 

### Blogroll

`[blogroll num="8"]`

=> see official Pirate Rogue documentation

### Featured posts

`[section_featured_top cat="top"]`

=> see official Pirate Rogue documentation

### Topic rectangle

This shortcode provides a rectangle with a title, content, background image and is linked.

`[topicrect url="" title="" image="" width=""]content[/topicrect]`

`url`: url for the linking

`title`: displayed title 

`image`: url to background image

`width`: width of the rectangle, defaults to `31%`. The rectangle has a margin of 1% on each side, so subtract that.

`content`: displayed underneath the title

**Please only use inside a `[flexrow]`.**

### Flexrow

This shortcode provides a flexbox container.

`[flexrow]content[/flexrow]`

Sets the `content` into a flexbox with wrap, centered and row direction.

### Fancy Title 

Title in the pirate style.

`[fancytitle title=""]`

`title`: title to display

### Heading with Image

This shortcode puts an image behind a h2 heading. 

`[hpic image="" title=""]`

`image`: image to be placed in the background.

`title`: headline

## Open Issues

#### Post overview images not sized properly

Image in post overview aren't full height.


