# Markdown Reference


[Markdown](http://daringfireball.net/projects/markdown) is a [formatting syntax](http://whatismarkdown.com) designed "to write using an easy-to-read, easy-to-write plain text format, and optionally convert it to structurally valid XHTML (or HTML)" and [other Documents](http://johnmacfarlane.net/pandoc). Mostly you can write or paste simply text and use your editor's formatting options. To get an idea of some more formatting options have a look...


<pre><code>

# Header 1
## Header 2
### Header 3
#### Header 4
##### Header 5

## Header 2 with a custom ID         {#id-goes-here}

[Link back to the H2 above](#id-goes-here)

This is a paragraph, which is text surrounded by whitespace. Paragraphs can be on one 
line (or many), and can drone on for hours.

Text with&middot;&middot;
two trailing spaces&middot;&middot;
(on the right)&middot;&middot;
can be used&middot;&middot;
to create simple line breaks&middot;&middot;

Here is a Markdown link to [Google](https://google.com), and a link as literal &lt;http://link.com&gt;.

Images can be definet like this: ![picture alternative text](path/to/image/photo.jpg "Title is optional")

Now some inline markup like _italics_,  **bold**, and `code()`. Note that underscores in 
words are ignored in Markdown Extra.


* Bullet lists are easy too (normally using a star sign as bullet point)
- Another one using a minus sign
+ Another one using a plus sign

1. A numbered list
2. Which is numbered
3. With periods, a dot and a space
1. You don't have to worry about the numbers, they are auto-incremented

**It is important to separate the list from the text with at least one blank line!**

## Text blocks

> Blockquotes are like quoted text in email replies
>> And, they can be nested


And now some code:

    // Code is just text indented a bit
    which(is_easy) to_remember();

~~~

// Markdown has un-indented code blocks too

if (this_is_more_code == true && !indented) {
    // tild wrapped code blocks, also not indented
}

~~~

## Horizontal rules

* * * *
****
--------------------------


## Markdown tables

| Header | Header | Right  |
| ------ | ------ | -----: |
|  Cell  |  Cell  |   $10  |
|  Cell  |  Cell  |   $20  |

* Outer pipes on tables are optional
* Colon used for alignment (right versus left)

## Markdown definition lists

Bottled water
: $ 1.25
: $ 1.55 (Large)

Milk
Pop
: $ 1.75

* Multiple definitions and terms are possible
* Definitions can include multiple paragraphs too

## Abbreviations

*[ABBR]: Markdown abbreviations (produces an &lt;abbr&gt; tag)
*[HTML]: Hyper Text Markup Language
*[W3C]:  World Wide Web Consortium

will produce some descriptive tooltips on the words "HTML" and "W3C" within the text below.

The HTML specification is maintained by the W3C.

## Footnotes

That's some text with a footnote[^fn1].

[^fn1]: And that's the footnote. It can be placed anywhere in the text.


## HTML container with Markdown

Sometimes it is usefull to wrap some HTML around Markdown (eg. to give a text block a corner etc.)

&lt;div class="custom-class" markdown="1"&gt;
This is a div wrapping some Markdown. 
Without the attribute markdown="1", it ignores translating the Markdown.
&lt;/div&gt;

</code></pre>

