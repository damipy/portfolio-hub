import { TextControl } from '@wordpress/components';
import { useBlockProps } from '@wordpress/block-editor';

export default function Edit({ attributes, setAttributes }) {
    const blockProps = useBlockProps();

    return (
        <div {...blockProps}>
            <TextControl
                label="Enter a name:"
                value={attributes.name}
                onChange={(value) => setAttributes({ name: value })}
            />
            <p className="greeting-text">Hello, {attributes.name}!</p>
        </div>
    );
}