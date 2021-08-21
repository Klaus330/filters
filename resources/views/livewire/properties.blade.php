<div class="products">
    @foreach($properties as $property)
    <div class="product">
        <div class="product__image">
            <a href="#" class="js-property-modal-open hidden-xs" data-popup-trigger="preview" data-id="2136246"></a>
            <a href="https://stage.home.ca/listing/toronto-real-estate/5-st-joseph-street/2603" class="hidden-lg hidden-md hidden-sm"></a>
            <img alt="House for sale at 2603-5 St Joseph Street, Toronto - MLS: C5342814" data-srcset="https://photos.home.ca/file/mls-images/thumbs/C53/C53428/468-C5342814-01.jpg 480w, https://photos.home.ca/file/mls-images/thumbs/C53/C53428/786-C5342814-01.jpg 768w" imagesrcset="https://photos.home.ca/file/mls-images/thumbs/C53/C53428/468-C5342814-01.jpg 480w, https://photos.home.ca/file/mls-images/thumbs/C53/C53428/786-C5342814-01.jpg 768w" data-img-defer-src="https://photos.home.ca/file/mls-images/thumbs/C53/C53428/468-C5342814-01.jpg" src="data:image/png;base64,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" onerror="this.src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAboAAAEsCAYAAAC1yHbbAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAibSURBVHgB7d3ddRNHGMfhXct8CLigBEoInaSVVJQSQgl0QEqgBN8YgWyh+DUZWBYZybZkWX89zzk5hqyPDxchP8/Mu+O+uzKbzd6cnp7+vVwu/7j67esOAA5Y3/fvLi8v/5pOpx/7itxkMvnQCRwAWc4Wi8Xb/uLi4p+rldyfHQDked/P5/NlBwCZzk46AMj1WugAiCZ0AEQTOgCiCR0A0YQOgGhCB0A0oQMgmtABEE3oAIgmdABEEzoAogkdANGEDoBoQgdANKEDIJrQARBN6ACIJnQARBM6AKIJHQDRhA6AaEIHQDShAyCa0AEQTegAiCZ0AEQTOgCiCR0A0YQOgGhCB0A0oQMgmtABEE3oAIgmdABEEzoAogkdANGEDoBoQgdANKEDIJrQARBN6ACIJnQARBM6AKIJHQDRhA6AaEIHQDShAyCa0AEQTegAiCZ0AEQTOgCiCR0A0YQOgGhCB0A0oQMgmtABEE3oAIgmdABEEzoAogkdANGEDoBoQgdANKEDIJrQARBN6ACIJnQARBM6AKIJHQDRhA6AaEIHQDShAyCa0AEQTegAiCZ0AEQTOgCiCR0A0YQOgGhCB0A0oQMgmtABEE3oAIgmdABEEzoAogkdANGEDoBoQgdANKEDIJrQARBN6ACIJnQARBM6AKIJHQDRhA6AaEIHQDShAyCa0AEQTegAiCZ0AEQTOgCiCR0A0YQOgGhCB0A0oQMgmtABEE3oAIgmdABEEzoAogkdANGEDoBoQgdANKEDIJrQARBN6ACIJnQARBM6AKIJHQDRhA6AaEIHQLTTDnhUlstl9+XLl+tfP3v2rOv7vgPuTujgEfn69Wv36dOn69iVxWLRvXjxQuzgHmxdwiMxjtxN/w64HaGDR+Dy8vKnoE0mk+709NuGS8Xu/Pz8+nOA2+vn87lvFWEDFZzPnz9ff1zl5OSke/78+fXH27j6O/j9TK48ffr0+mxu3TNgM1Z0sKGKTp2Z1apr1T/1rD7nNipiw5BVxIYhG4dtHD5gPcMosKFtnpPV16rVYduOrGGTWg227cp63gZQKnb16/r8UrGr5/X5wHpCBw+stj5ns9n3LdDa6pxOp9+3PCtidV5X2sTlkydPrs/t2jnexcWFiUzYkK1LeEBtinIYuYpVi1wbPKmP44nL9rktbCYyYTNCBw/kLuHaJIzD58CvhA4eQG01DiNWW5HDyI2fD7WYtfO8itzLly+vz+7a81oF3nYQBo6FMzrYsZqSHEaopihbpFY9X6UCWOd6wynMdj1Ym8Ksj/V5Xj+Anwkd7FBNStZqralJyVrN3fR8nRbEFrMWzBa78XNA6GAn2gqsJiNLrbxqsrImJ1c9v42KWW1XVjTr61bsajuzollfd/wcjp0zOtiydmbWItbO1Frk2pnbXSLXjK8Mq/fvhmd+4+dwzIQOtmjTycptTEl6/QA2I3SwRe2KsFIruF2vsm5aPboQGn4QOtiBOjcbRq7OzepMbherq3aTShtEaeeBbSClnQe6I5NjZRgFtuwurw9sw/j1AhOZ8I3QwZasuph5eHHzQ1j1+oELoTl2ti5hC9ogyDByw9tMHlLFrM7lhrew1Lnd8BaW4XNIJ3RwT7+7mHlfTGTCD0IH9/CYA+JCaPimv9rm8C0dbKAmF4dbkbUl2O6bLLUl2AZCHpPx2WFZd/8mJBE62MA2Lmbet+GF0KX+vMNXDsbPIYWpS1hj2xcz74sLoTlWVnRwg11ezLxPtYU5vPC5tmPbhdCrnsOhEzpYYZOpxYrcoQ5yrBuiGT+HQ2bqEkYe8mLmffH6AcfEig4Gxtt4tU1Z25U3bfMdulXbscPbXFZNbMKhETr437opxPHz+6pVVA213HZ7sP1w1W3GdjxFaiKTJL5Ng24/rw/USqq9vH1btQKrrcVtcSE0yYSOo7Zuq26XFzPfZ9BjF0MiLoQmlWEUjlYbuGgRG1/MXOrVgWP6oaXjLVEXQpNA6DhK6+6B5AcTmRw6f6s5SsM7Kb0ztt6qC6H9xHIOhdBxlNo4fW3NidxmKnK1jdnO7rxywKHwXypHqf5n7bb+u6lhFdOXHBIrOgCiCR0A0YQOgGhCB0A0oYM9uc9PP/AOG2zO1CXsSV2tddcR/WO6rQXuS+hgT2pFt+2LooFf2boEIJrQARBN6ACIJnQARBM6AKIJHQDRhA6AaEIHQDShAyCam1FgT169enXnn2xet6qcn593wHpWdABEEzoAogkdANGEDoBoQgdANKEDIJrQARBN6ACIJnQARBM6AKIJHQDRhA6AaEIHQDShAyCa0AEQTegAiCZ0AEQTOgCiCR38Rt/3HXDYhA5+4+TkZCexu+/Xfax/LniM+vl8vuwAIJQVHQDRhA6AaEIHQDShAyCa0AEQTegAiCZ0AEQTOgCiCR0A0YQOgGhCB0A0oQMgmtABEE3oAIgmdABEEzoAogkdANGEDoBoQgdANKEDIJrQARBN6ACIJnQARBM6AKIJHQDRhA6AaEIHQDShAyCa0AEQTegAiCZ0AEQTOgCiCR0A0YQOgGhCB0A0oQMgmtABEE3oAIgmdABEEzoAogkdANGEDoBoQgdANKEDIJrQARBN6ACIJnQARBM6AKIJHQDRhA6AaEIHQDShAyCa0AEQTegAiCZ0AEQTOgCiCR0A0YQOgGhCB0A0oQMgmtABEE3oAIgmdABEEzoAogkdANGEDoBoQgdANKEDIJrQARBN6ACIJnQARBM6AKIJHQDRhA6AaEIHQDShAyCa0AEQTegAiCZ0AEQTOgCiCR0A0YQOgGhCB0A0oQMgmtABEE3oAIgmdABEEzoAogkdANGEDoBoQgdANKEDIJrQARBN6ACIJnQARBM6AKIJHQDRKnRnHQCEqtD92wFAoOVy+a6fzWZvJpPJh6vfv+4AIMfZYrF4ezKdTj/WL6p6HQAcvjqSe19tq8b9B6B3FsWtfGbnAAAAAElFTkSuQmCC';" class="lazyload js-img-defer" width="480" height="320" />
        </div>
        <div class="product__content">
            <div class="product__tags">
                <span class="product__tag ">
                    {{$property->purpose ? 'For Rent' : 'For Sale'}} {{$property->type}}
                </span>
                <div class="product__time">
                    3 hours
                </div>
            </div>
            <div class="product__head">
                <span class="product__price">${{$property->price}}</span>
                <span class="product__like  js-save-property" data-property-id="2136246" data-property-saved="" data-property-type="CondoProperty" data-property-class="product__like--liked">
                    <span class="ico-heart">
                        <svg>
                            <use xlink:href="#ico-heart" />
                        </svg>
                    </span>
                </span>
            </div>
            <ul class="list-info truncate">
                <li>{{$property->beds}} bed</li>
                <li>{{$property->baths}} bath</li>
                <li>500-599 sqft</li>
            </ul>
            <p class="product__title truncate">
                <a href="https://stage.home.ca/listing/toronto-real-estate/5-st-joseph-street/2603">
                    2603-5 St Joseph Street, Toronto
                    &bull; Bay Street Corridor
                </a>
            </p>
            <ul class="list-info list-info--meta">
            </ul>
        </div>
    </div>
    @endforeach
    
    {{ $properties->links() }}
</div>

